<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino_Bouteille extends Model
{
    use HasFactory;
    protected $table = 'vino_bouteilles';
    protected $fillable = [
        'image',
        'code_saq', 
        'description',
        'prix_saq',
        'url_saq',
        'url_img',
        'vino_format_id',
        'vino_type_id',
        'pays_id'
    ];
}