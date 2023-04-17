<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'utilisateurs';
    protected $fillable = [
        'nom',
        'prenom',
        'courriel',
        'mot_passe',
        'utilisateur_privilege_id',
        'pays_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'mot_passe', /* est-ce que c'est mot de passe aussi ? */
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function userHasCity(){
        // ordre est important autre model, clé primaire de la table jointe, clé étrangère
        return $this->hasOne('App\Models\City', 'id', 'city_id');
    }
}