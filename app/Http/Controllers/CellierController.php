<?php

namespace App\Http\Controllers;

use App\Models\Vino_Bouteille;
use App\Models\Bouteille_Par_Cellier;
use App\Models\Vino_Cellier;
use App\Models\Bouteille;
use Illuminate\Http\Request;


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
    $cellier = Vino_Cellier::all();
    return view('celliers.index', ['celliers' => $cellier]);
  }
  // formulaire de création d'un cellier 
  public function creer()
  {
    return view('celliers.creer');
  }

  // Enregistrement dans la bd
  public function insererCellier(Request $request)
  {
    // ** doit ajouter Auth qui vient du login
    $request['utilisateurs_id'] = 1;
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
  public function afficher($cellier)
  {
    // chercher dans la classe Vino_Cellier la ligne correspondante au id ($cellier)
    $celliers = Vino_Cellier::find($cellier); 
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
      'type'
    )
      ->join('bouteille_par_celliers', 'vino_bouteilles.id', '=', 'bouteille_par_celliers.vino_bouteille_id')
      ->join('vino_celliers', 'vino_celliers.id', '=', 'bouteille_par_celliers.vino_cellier_id')
      ->join('vino_formats', 'vino_formats.id', '=', 'vino_bouteilles.vino_format_id')
      ->join('vino_types', 'vino_types.id', '=', 'vino_bouteilles.vino_type_id')
      ->join('pays', 'pays.id', '=', 'vino_bouteilles.pays_id')
      ->where('vino_celliers.id', $cellier)
      ->get();

    return view('celliers.afficher', ['cellier' => $celliers,
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
  public function ajouterBouteille(Vino_Cellier $cellier)
  {
    return view('celliers.ajouterBouteille', ['cellier' => $cellier]);
  }
}
