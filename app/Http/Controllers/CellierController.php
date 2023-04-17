<?php
namespace App\Http\Controllers;

use App\Models\Vino_Bouteille;
use App\Models\Bouteille_Par_Cellier;
use App\Models\Vino_Cellier;
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

}
?>
