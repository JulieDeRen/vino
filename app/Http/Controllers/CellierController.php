<?php
namespace App\Http\Controllers;

use App\Models\Vino_Bouteille;
use App\Models\Bouteille_Par_Cellier;
use App\Models\Vino_Cellier;


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
  // Ajouter Auth
  public function index()
  {
    $cellier=Vino_Cellier::all();
    // return $cellier;
    return view('celliers.index', ['celliers' => $cellier]);
  }
  public function creer()
  {
    $cellier=Vino_Cellier::all();
    // return $cellier;
    return view('celliers.creer', ['celliers' => $cellier]);
  }

}
?>
