<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;


class PageController extends Controller
{
    public function maison()
    {
        return view('maison');
    }
    public function repondrevote()
    {
        return view('repondrevote');
    }
    public function affichagereponsevote()
    {
        return view('affichagereponsevote');
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
        $request->validate([
            'text_question' => 'required|max:32',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'option.*' => 'required', // Validation pour chaque option
        ]);
    
        $question = new Question();
        $question->text_question = $request->input('text_question');
        $question->start_date = $request->input('start_date');
        $question->end_date = $request->input('end_date');
        $question->save();
    
        // Récupération de l'id de la question nouvellement créée
        $questionId = $question->id;
    
        // Enregistrement des réponses pour chaque option
        foreach ($request->input('option') as $option) {
            $answer = new Answer();
            $answer->question_id = $questionId;
            $answer->answer = $option;
            $answer->save();
        }
    
        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Vote enregistré avec succès !');
    }
/* 
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

        
        
    } */



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
