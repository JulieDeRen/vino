<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino_Type extends Model
{
    use HasFactory;
    protected $table = 'vino_types';
    protected $fillable = [
        'type'
    ];
}