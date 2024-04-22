<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('/maison');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/maison', [PageController::class, 'maison'])->name('maison');
Route::get('/concept', [PageController::class, 'concept'])->name('concept');
Route::get('/dernier_episode', [PageController::class, 'dernierEpisode'])->name('dernier_episode');
Route::get('/tous-les-episodes', [PageController::class, 'tousLesEpisodes'])->name('tous_les_episodes');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/connexion', [PageController::class, 'connexion'])->name('connexion');
Route::get('/mon_compte', [PageController::class, 'monCompte'])->name('mon_compte');
Route::get('/info_generale', [PageController::class, 'infoGenerale'])->name('info_generale');
Route::get('/parametre', [PageController::class, 'parametre'])->name('parametre');
Route::get('/participants', [PageController::class, 'participants'])->name('participants');


require __DIR__ . '/auth.php';
