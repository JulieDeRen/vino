<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BouteilleController;

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

Route::get('/bouteilles', [BouteilleController::class, 'index'])->name('bouteilles');
