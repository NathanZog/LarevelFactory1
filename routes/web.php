<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// batiment
Route::get('/batiment', [BatimentController::class, "index"])->name('batiment');
Route::get('/batiment/create', [BatimentController::class, "create"])->name('createbatiment');
Route::post('/batiment/store', [BatimentController::class, "store"])->name('storebatiment');
Route::delete('/batiment/{id}/delete', [BatimentController::class, "destroy"])->name('destroybatiment');
Route::get('/batiment/{id}/show', [BatimentController::class, "show"])->name('showbatiment');
Route::get('/batiment/{id}/edit', [BatimentController::class, "edit"])->name('editbatiment');
Route::put('/batiment/{id}update', [BatimentController::class, "update"])->name('updatebatiment');

// Eleve
Route::get('/eleve', [EleveController::class, "index"])->name('eleve');
Route::get('/eleve/create', [EleveController::class, "create"])->name('createeleve');
Route::post('/eleve/store', [EleveController::class, "store"])->name('storeeleve');
Route::delete('/eleve/{id}/delete', [EleveController::class, "destroy"])->name('destroyeleve');
Route::get('/eleve/{id}/show', [EleveController::class, "show"])->name('showeleve');
Route::get('/eleve/{id}/edit', [EleveController::class, "edit"])->name('editeleve');
Route::put('/eleve/{id}update', [EleveController::class, "update"])->name('updateeleve');


// Formation
Route::get('/formation', [FormationController::class, "index"])->name('formation');
Route::get('/formation/create', [FormationController::class, "create"])->name('createformation');
Route::post('/formation/store', [FormationController::class, "store"])->name('storeformation');
Route::delete('/formation/{id}/delete', [FormationController::class, "destroy"])->name('destroyformation');
Route::get('/formation/{id}/show', [FormationController::class, "show"])->name('showformation');
Route::get('/formation/{id}/edit', [FormationController::class, "edit"])->name('editformation');
Route::put('/formation/{id}update', [FormationController::class, "update"])->name('updateformation');


// TypeFormation
Route::get('/typeformation', [TypeFormationController::class, "index"])->name('typeformation');
Route::get('/typeformation/create', [TypeformationController::class, "create"])->name('createtypeformation');
Route::post('/typeformation/store', [TypeformationController::class, "store"])->name('storetypeformation');
Route::delete('/typeformation/{id}/delete', [TypeformationController::class, "destroy"])->name('destroytypeformation');
Route::get('/typeformation/{id}/show', [TypeformationController::class, "show"])->name('showtypeformation');
Route::get('/typeformation/{id}/edit', [TypeformationController::class, "edit"])->name('edittypeformation');
Route::put('/typeformation/{id}update', [TypeformationController::class, "update"])->name('updatetypeformation');
