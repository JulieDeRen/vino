<?php

namespace App\Http\Controllers;

use App\Jobs\DownloadDataSAQ;
use App\Models\Bouteille;
use App\Models\SAQ;

class SAQController extends Controller
{
    public function uploadVins() {
        DownloadDataSAQ::dispatch();
    }

    public function show(SAQ $saq) {
        $listeBouteilles = Bouteille::all();
        return view('bouteille.show', ['bouteilles' => $listeBouteilles]);
    }
}
