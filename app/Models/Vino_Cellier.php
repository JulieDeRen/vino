<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino_Cellier extends Model
{
    protected $table = 'vino_celliers';
    use HasFactory;
    protected $fillable = [
        'nom',
        'quantite_max', 
        'utilisateurs_id',
    ];
}