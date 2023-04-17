<?php

namespace App\Http\Controllers;

use App\Models\Bouteille;
use App\Models\SAQ;
use Illuminate\Http\Request;

class SAQController extends Controller
{
    public function index(SAQ $saq) {
        $liste = $saq->getProduits();

        echo('<pre>');
        print_r($liste);
        echo('</pre>');

        foreach ($liste as $bouteille) {
            $inputVine = new Bouteille;
            $inputVine->nom = strval($bouteille->nom);
            $inputVine->image = strval($bouteille->img);
            $inputVine->code_saq = $bouteille->desc->code_SAQ;
            $inputVine->description = "Inconnue";
            $inputVine->prix_saq = doubleval(str_replace(',', '.', substr($bouteille->prix, 0, -1)));
            $inputVine->url_saq = strval($bouteille->url);
            $inputVine->url_img = strval($bouteille->img);
            $inputVine->vino_format_id = 1;
            $inputVine->vino_type_id = 1;
            $inputVine->pays_id = 1;
            //$inputVine->save();
        }
    }

    public function show(SAQ $saq) {
        $listeBouteilles = Bouteille::all();
        return view('bouteille.show', ['bouteilles' => $listeBouteilles]);
    }
}
