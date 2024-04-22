<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PageController extends Controller
{
    public function maison()
    {
        return view('maison');
    }

    public function concept()
    {
        return view('concept');
    }

    public function dernierEpisode()
    {
        return view('dernier_episode');
    }

    public function tousLesEpisodes()
    {
        return view('tous_les_episodes');
    }
    public function creationvote()
    {
        return view('creationvote');
    }

    public function storeVote(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'option' => 'required|array|min:2', // Au moins 2 options nécessaires
            'option.*' => 'string', // Chaque option doit être une chaîne
        ]);

        // Créer un nouveau vote avec les données validées
        $vote = new Vote();
        $vote->titre = $validatedData['titre'];
        $vote->date_debut = $validatedData['date_debut'];
        $vote->date_fin = $validatedData['date_fin'];
        $vote->save();

        // Enregistrer les options du vote
        foreach ($validatedData['option'] as $optionText) {
            $vote->options()->create(['texte' => $optionText]);
        }

        // Rediriger vers une page de confirmation ou une autre action
        return redirect()->route('vote.confirmation');

        
        
    }



    public function contact()
    {
        return view('contact');
    }

    public function connexion()
    {
        return view('connexion');
    }

    public function monCompte()
    {
        return view('mon_compte');
    }

    public function infoGenerale()
    {
        return view('info_generale');
    }

    public function parametre()
    {
        return view('parametre');
    }

    public function participants()
    {
        return view('participants');
    }

    public function omar()
    {
        return view('participants/omar');
    }

    public function ambre()
    {
        return view('participants/ambre');
    }

    public function julie()
    {
        return view('participants/julie');
    }

    public function aron()
    {
        return view('participants/aron');
    }

    public function sofia()
    {
        return view('sofia');
    }

    public function julien()
    {
        return view('participants/julien');
    }

    public function theo()
    {
        return view('participants/theo');
    }

    public function lea()
    {
        return view('participants/lea');
    }

    public function max()
    {
        return view('participants/max');
    }

    public function ela()
    {
        return view('participants/ela');
    }

    public function lou()
    {
        return view('participants/lou');
    }

    public function lionel()
    {
        return view('participants/lionel');
    }

    public function andrea()
    {
        return view('participants/andrea');
    }

    public function marie()
    {
        return view('participants/marie');
    }

    public function jean()
    {
        return view('participants/jean');
    }

    public function ana()
    {
        return view('participants/ana');
    }
}
