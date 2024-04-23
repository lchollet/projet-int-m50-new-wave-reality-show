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
Route::get('/creationvote', [PageController::class, 'creationvote'])->name('creationvote');
Route::get('/repondrevote', [PageController::class, 'repondrevote'])->name('repondrevote');
Route::get('/affichagereponsevote', [PageController::class, 'affichagereponsevote'])->name('affichagereponsevote');

Route::post('/creationvote', [PageController::class, 'storeVote'])->name('creationvotepost');




//participants 
Route::get('/omar', [PageController::class, 'omar'])->name('omar');
Route::get('/ambre', [PageController::class, 'ambre'])->name('ambre');
Route::get('/julie', [PageController::class, 'julie'])->name('julie');
Route::get('/aron', [PageController::class, 'aron'])->name('aron');
Route::get('/sofia', [PageController::class, 'sofia'])->name('sofia');
Route::get('/julien', [PageController::class, 'julien'])->name('julien');
Route::get('/theo', [PageController::class, 'theo'])->name('theo');
Route::get('/lea', [PageController::class, 'lea'])->name('lea');

Route::get('/max', [PageController::class, 'max'])->name('max');
Route::get('/ela', [PageController::class, 'ela'])->name('ela');
Route::get('/lou', [PageController::class, 'lou'])->name('lou');
Route::get('/lionel', [PageController::class, 'lionel'])->name('lionel');
Route::get('/andrea', [PageController::class, 'andrea'])->name('andrea');
Route::get('/marie', [PageController::class, 'marie'])->name('marie');
Route::get('/jean', [PageController::class, 'jean'])->name('jean');
Route::get('/ana', [PageController::class, 'ana'])->name('ana');




require __DIR__ . '/auth.php';
