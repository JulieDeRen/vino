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
    $cellier=Vino_Cellier::all();
    // return $cellier;
    return view('celliers.index', ['celliers' => $cellier]);
  }
  // Création de nouveau cellier 
  // ** doit ajouter Auth qui vient du login
  public function creer()
  {
    $cellier=Vino_Cellier::all();
    // return $cellier;
    return view('celliers.creer', ['celliers' => $cellier]);
  }

  public function insererCellier(Request $request)
  {
    // return $request;
    $request['utilisateurs_id'] = 1;
    $cellier = Vino_Cellier::create([
      'nom' => $request->nom,
      'quantite_max' => $request ->quantite_max,
      'description' => $request ->description,
      'image' => $request ->image,
      'utilisateurs_id'=> $request->utilisateurs_id,
  ]);
  $cellier->save();
  return redirect(route('celliers.index'));
  }
  public function afficher($cellier)
  {
      // chercher dans la classe Vino_Cellier la ligne correspondante au id ($cellier)
      // $cellier = Vino_Cellier::find($cellier); 
      $cellier = Vino_Cellier::select('*')
      -> join('bouteille_par_celliers', 'vino_celliers.id', '=', 'bouteille_par_celliers.vino_cellier_id')
      -> join('vino_bouteilles', 'vino_bouteilles.id', '=', 'bouteille_par_celliers.vino_bouteille_id')
      ->where('vino_celliers.id', $cellier)
      ->get();

      return view('celliers.afficher', ['cellier' => $cellier]);
  }

  public function modifier(Vino_Cellier $cellier)
  {
      return view('celliers.modifier', ['cellier'=>$cellier]);
  }
  public function enregistrerModification(Request $request, Vino_Cellier $cellier)
  {
      $cellier->update([
        'nom' => $request->nom,
        'quantite_max' => $request ->quantite_max,
        'description' => $request ->description,
        'image' => $request ->image,
      ]);
      return redirect(route('celliers.index'))->withSuccess('Article mis à jour.');
  }
  

}
?>
