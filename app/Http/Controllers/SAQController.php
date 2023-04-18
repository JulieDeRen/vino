<?php

namespace App\Http\Controllers;

use App\Models\Bouteille;
use App\Models\Pays;
use App\Models\SAQ;
use App\Models\Vino_Format;
use App\Models\Vino_Type;

class SAQController extends Controller
{
    public function uploadVins() {
        set_time_limit(0);
        $saq = new SAQ;
        $liste = [];
        for($i = 1; $i <= 10; $i++) {
            $liste = array_merge($liste, $saq->getProduits(96, $i));
            sleep(1);
        }

        foreach ($liste as $bouteille) {
            echo("<pre>");
            print_r($bouteille);
            echo("</pre>");
            // Vérification de l'existance de la bouteille dans la base de
            $checkList = Bouteille::where('code_saq', $bouteille->desc->code_SAQ)->get();
            if(count($checkList) > 0) {
                continue;
            }

            $inputVine = new Bouteille;
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
            //$inputVine->save();

            // 1. Reprendre tous les bouteilles
            // 2. Verification si le type existe dans la base, sinon créer et attribuer à la bouteille
            // 2.
        }
        echo("Les bouteilles entrégistrées avec success!");
    }

    public function show(SAQ $saq) {
        $listeBouteilles = Bouteille::all();
        return view('bouteille.show', ['bouteilles' => $listeBouteilles]);
    }
}
