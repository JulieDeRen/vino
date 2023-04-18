<?php

namespace App\Jobs;

use App\Models\Bouteille;
use App\Models\Pays;
use App\Models\SAQ;
use App\Models\Vino_Format;
use App\Models\Vino_Type;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DownloadDataSAQ implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        set_time_limit(0);
        $saq = new SAQ();
        $pages = 40;
        for($i = 1; $i <= $pages; $i++) {
            $liste = $saq->getProduits(96, $i);
            foreach ($liste as $bouteille) {
                // Vérification de l'existance de la bouteille dans la base de
                $checkList = Bouteille::where('code_saq', $bouteille->desc->code_SAQ)->get();
                if(count($checkList) > 0) {
                    continue;
                }

                $inputVine = new Bouteille();
                $inputVine->nom = strval($bouteille->nom);
                $inputVine->image = strval($bouteille->img);
                $inputVine->code_saq = $bouteille->desc->code_SAQ;
                $inputVine->description = "Inconnue";
                $inputVine->prix_saq = doubleval(str_replace(',', '.', substr($bouteille->prix, 0, -1)));
                $inputVine->url_saq = strval($bouteille->url);
                $inputVine->url_img = strval($bouteille->img);

                // Type -----------------------------------
                $type = Vino_Type::where("type", $bouteille->desc->type)->get();
                if(count($type) > 0) {
                    $inputVine->vino_type_id = $type[0]->id;
                } else {
                    $vinoType = Vino_Type::create(['type' => $bouteille->desc->type]);
                    $inputVine->vino_type_id = $vinoType->id;
                }

                // FORMAT -----------------------------------
                $format = Vino_Format::where("format", $bouteille->desc->format)->get();
                if(count($format) > 0) {
                    $inputVine->vino_format_id = $format[0]->id;
                } else {
                    $vinoFormat = Vino_Format::create(['format' => $bouteille->desc->format]);
                    $inputVine->vino_format_id = $vinoFormat->id;
                }

                // Pays -----------------------------------
                $pays = Pays::where("pays", $bouteille->desc->pays)->get();
                if(count($pays) > 0) {
                    $inputVine->pays_id = $pays[0]->id;
                } else {
                    $vinoPays = Pays::create(['pays' => $bouteille->desc->pays]);
                    $inputVine->pays_id = $vinoPays->id;
                }

                // Enregistrement
                $inputVine->save();

                logs()->info("Page $i des bouteilles téléchargées");
                // 1. Reprendre tous les bouteilles
                // 2. Verification si le type existe dans la base, sinon créer et attribuer à la bouteille
                // 2.
            }
            info("Les bouteilles entrégistrées avec success!");
        }
    }
}
