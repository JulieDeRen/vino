<?php

namespace App\Http\Controllers;

use App\Models\Vino_Bouteille;
use App\Models\Bouteille_Par_Cellier;
use App\Models\Vino_Cellier;
use App\Models\Bouteille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * Class Controler
 * Gère les requêtes HTTP
 *
 * @author Jonathan Martel
 * @version 1.0
 * @update 2019-01-21
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */

class CellierController
{

  // Affichage du ou des celliers appartenant à l'utilisateur qui est inscrit
  // **Ajouter Auth
  public function index()
  {
    // Si une session existe, octroyer le numéro d'id de la session à l'utilisateur
    // Rechercher tous les celliers oû l'utilisateurs_id correspond à la session en cours
    // Afficher les celliers
    // Sinon afficher login
    if(Auth::id()){
      $utilisateur_id = Auth::id();
      $cellier = Vino_Cellier::select()
      ->where('vino_celliers.utilisateurs_id', $utilisateur_id)
      ->get();
      return view('celliers.index', ['celliers' => $cellier]);
    }
    else {
      return redirect(route('login'));
    }
  }
  // formulaire de création d'un cellier 
  public function creer()
  {
    return view('celliers.creer');
  }

  // Enregistrement dans la bd
  public function insererCellier(Request $request)
  {
    return $request;
    // ** doit ajouter Auth qui vient du login
    $request['utilisateurs_id'] = Auth::id();
    $cellier = Vino_Cellier::create([
      'nom' => $request->nom,
      'quantite_max' => $request->quantite_max,
      'description' => $request->description,
      'image' => $request->image,
      'utilisateurs_id' => $request->utilisateurs_id,
    ]);
    $cellier->save();
    return redirect(route('celliers.index'));
  }

  // afficher un cellier et les bouteilles de ce cellier
  // passer en param de fonction afficher $cellier = celliers.id
  public function afficher($idCellier)
  {
    // chercher dans la classe Vino_Cellier la ligne correspondante au id ($cellier)
    $cellier = Vino_Cellier::find($idCellier); 
    $bouteilles = Bouteille::select(
      'date_achat',
      'garde_jusqua',
      'prix AS prixPaye',
      'quantite AS quantiteBouteille',
      'vino_cellier_id',
      'vino_bouteilles.id AS vino_bouteille_id',
      'millesime',
      'vino_bouteilles.nom AS nomSAQ',
      'vino_bouteilles.image AS imageSAQ',
      'code_saq',
      'vino_bouteilles.description AS descriptionSAQ',
      'prix_saq',
      'url_saq',
      'url_img',
      'vino_format_id',
      'vino_type_id',
      'pays_id',
      'pays',
      'format',
      'type',
      'bouteille_par_celliers.id' 
    )
      ->join('bouteille_par_celliers', 'vino_bouteilles.id', '=', 'bouteille_par_celliers.vino_bouteille_id')
      ->join('vino_celliers', 'vino_celliers.id', '=', 'bouteille_par_celliers.vino_cellier_id')
      ->join('vino_formats', 'vino_formats.id', '=', 'vino_bouteilles.vino_format_id')
      ->join('vino_types', 'vino_types.id', '=', 'vino_bouteilles.vino_type_id')
      ->join('pays', 'pays.id', '=', 'vino_bouteilles.pays_id')
      ->where('vino_celliers.id', $cellier)
      ->get();

    return view('celliers.afficher', ['cellier' => $cellier,
                                      'bouteilles' => $bouteilles]);
  }

  // Afficher formulaire de modification des informations de la table vino_celliers
  public function modifier(Vino_Cellier $cellier)
  {
    return view('celliers.modifier', ['cellier' => $cellier]);
  }
  // Enregistrer dans la bd les modifications de la table vino_celliers
  public function enregistrerModification(Request $request, Vino_Cellier $cellier)
  {
    $cellier->update([
      'nom' => $request->nom,
      'quantite_max' => $request->quantite_max,
      'description' => $request->description,
      'image' => $request->image,
    ]);
    return redirect(route('celliers.index'))->withSuccess('Article mis à jour.');
  }

  // Formulaire d'ajout de bouteilles au cellier
  public function ajouterBouteille(Request $request, Vino_Cellier $cellier)
  {
    return($request->vino_bouteille['id']);
    // valider si bouteille pas présente dans cellier
    // si pas présente l'ajouter
    $bouteilleValidation = Bouteille_Par_Cellier::findOrFail($request->vino_bouteille->id);
    if(!isset($bouteilleValidation)){
      $bouteille = Bouteille_Par_Cellier::create([
        'date_achat' => $request->date_achat,
        'garde_jusqua' => $request->garde_jusqua,
        'prix' => $request->vino_bouteille->prix,
        'quantite' => $request->quantite,
        'millesime' => $request->millesime,
        'vino_cellier_id'=> $cellier->id, 
        'vino_bouteille_id'=> $request->vino_bouteille->id  // vient de vue.js
      ]);
  
      $bouteille->save();
    }
    // si présente modifier la quantité au cellier
    // additionner le nombre de bouteilles existantes avec le nombre souhaité
    else{
      $totalBouteille = ($bouteilleValidation -> quantite + $request->quantite);
      // return $totalBouteille;
      $bouteille = Bouteille_Par_Cellier::select()
      ->where([
        ['vino_bouteille_id', '=', $request->vino_bouteille_id],
        ['vino_cellier_id', '=', $cellier->id]
      ])->update(['quantite' => $totalBouteille]);  
    }
    return redirect(route('celliers.afficher', $cellier->id));
  }

  public function modifierNbBouteille(Request $request, $cellier_id, $bouteille_id)
  {
    // vérifier dans les modèles si on peut trouver un enregistrement correspondant
    $cellier = Vino_Cellier::findOrFail($cellier_id);
    $bouteille = Vino_Bouteille::findOrFail($bouteille_id);

    $bouteilleParCellier = Bouteille_Par_Cellier::select()
    ->where([
      ['vino_bouteille_id', '=', $bouteille_id],
      ['vino_cellier_id', '=', $cellier_id]
    ])->update(['quantite' => $request->input('nbbouteille')]);
  }

  // Param $id = bouteille_par_cellier
  // Afficher fiche détail de bouteille
  public function afficherFicheBouteille(Bouteille_Par_Cellier $bouteille_par_cellier)
  {
    $bouteille_id = $bouteille_par_cellier->vino_bouteille_id;
    $bouteilleDetail = Bouteille_Par_Cellier::select()
    ->join('vino_bouteilles', 'vino_bouteilles.id', '=', 'bouteille_par_celliers.vino_bouteille_id')
    ->where([
      ['vino_bouteille_id', '=', $bouteille_id]
    ])
    ->get();
    // return $bouteilleDetail;
    $bouteilleDetail[0]['total'] = $bouteilleDetail[0]['quantite']*$bouteilleDetail[0]['prix_saq'];
    return view('celliers.detailBouteille', ['bouteille' => $bouteilleDetail[0]]);
  }

}
