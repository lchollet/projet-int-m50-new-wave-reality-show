<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('maison');
});

Route::get('/maison', [PageController::class, 'maison'])->name('maison');
Route::get('/concept', [PageController::class, 'concept'])->name('concept');
Route::get('/dernier_episode', [PageController::class, 'dernierEpisode'])->name('dernier_episode');
Route::get('/tous_les_episodes', [PageController::class, 'tousLesEpisodes'])->name('tous_les_episodes');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/connexion', [PageController::class, 'connexion'])->name('connexion');
Route::get('/mon_compte', [PageController::class, 'monCompte'])->name('mon_compte');
Route::get('/info_generale', [PageController::class, 'infoGenerale'])->name('info_generale');
Route::get('/parametre', [PageController::class, 'parametre'])->name('parametre');