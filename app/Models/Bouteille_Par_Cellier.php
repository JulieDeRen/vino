<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouteille_Par_Cellier extends Model
{
    use HasFactory;
    protected $table = 'bouteille_par_celliers';
    protected $fillable = [
        'date_achat',
        'garde_jusqua', 
        'prix',
        'quantite',
        'vino_cellier_id',
        'vino_bouteille_id',
        'millesime',
    ];
}