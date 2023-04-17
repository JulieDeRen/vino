<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BouteilleController;
use App\Http\Controllers\SAQController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/celliers', [App\Http\Controllers\CellierController::class, 'index'])->name('celliers.index');
<<<<<<< HEAD
Route::get('/creer-cellier', [App\Http\Controllers\CellierController::class, 'creer'])->name('celliers.creer');
Route::post('/creer-cellier', [App\Http\Controllers\CellierController::class, 'insererCellier'])->name('celliers.insererCellier');
=======
>>>>>>> f01418fc9699535a2a25b5ce055ea00d69feb366

Route::get('/bouteilles', [BouteilleController::class, 'index'])->name('bouteilles');

Route::get('/saq', [SAQController::class, 'index'])->name('bouteilles');
Route::get('/saq-show', [SAQController::class, 'show'])->name('bouteille.show');
