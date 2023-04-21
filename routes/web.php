<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BouteilleController;
use App\Http\Controllers\SAQController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('login', [LoginController::class, 'loginCustom'])->name('login.custom');

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/', [LoginController::class, 'loginCustom']);

Route::get('/celliers', [App\Http\Controllers\CellierController::class, 'index'])->name('celliers.index');
Route::get('/creer-cellier', [App\Http\Controllers\CellierController::class, 'creer'])->name('celliers.creer');
Route::post('/creer-cellier', [App\Http\Controllers\CellierController::class, 'insererCellier'])->name('celliers.insererCellier');
Route::get('/celliers/{cellier}', [App\Http\Controllers\CellierController::class, 'afficher'])->name('celliers.afficher');
Route::put('/celliers/{cellier}', [App\Http\Controllers\CellierController::class, 'ajouterBouteille']);
Route::put('/celliers/{cellier}/{idbouteille}', [App\Http\Controllers\CellierController::class, 'modifierNbBouteille']);
Route::get('/celliers-modifier/{cellier}', [App\Http\Controllers\CellierController::class, 'modifier'])->name('celliers.modifier');
Route::put('/celliers-modifier/{cellier}', [App\Http\Controllers\CellierController::class, 'enregistrerModification']);

Route::get('/bouteilles', [BouteilleController::class, 'listeBouteilles'])->name('bouteilles');

Route::get('/saq', )->name('bouteilles');


Route::get('/DEsaq', [SAQController::class, 'uploadVins'])->name('bouteilles.dd');
Route::get('/saq-show', [SAQController::class, 'show'])->name('bouteille.show');



// route to use for testing 
Route::get('/test', [HomeController::class, 'testPage'])->name('test');