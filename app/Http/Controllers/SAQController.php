<?php

namespace App\Http\Controllers;

use App\Jobs\DownloadDataSAQ;
use App\Models\Bouteille;
use App\Models\SAQ;

class SAQController extends Controller
{
    public function uploadVins() {
        echo("Hello");
        for($i = 1; $i <= 2; $i++) {
            DownloadDataSAQ::dispatch();
        }
    }

    public function show(SAQ $saq) {
        $listeBouteilles = Bouteille::all();
        return view('bouteille.show', ['bouteilles' => $listeBouteilles]);
    }
}
