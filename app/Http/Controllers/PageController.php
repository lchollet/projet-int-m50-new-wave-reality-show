<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function maison()
    {
        return view('maison');
    }

    public function submitVote(Request $request)
    {
        // Récupérer les données du vote envoyées depuis le formulaire
        $selectedOption = $request->input('option');
        $selectedOption = (int) $selectedOption;

        $questionId = $request->input('question_id');
        $userId = $request->input('user_id'); // Récupérer l'ID de l'utilisateur à partir du formulaire

        // Enregistrer le vote dans la base de données
        // Par exemple, vous pouvez créer un nouveau enregistrement dans votre table de votes
        $vote = new Vote();
        $vote->question_id = $questionId;
        $vote->answer_id = $selectedOption;
        $vote->user_id = $userId; // Associer l'ID de l'utilisateur au vote
        $vote->save();

        // Afficher les résultats du vote
        $results = Vote::select('answer_id', DB::raw('COUNT(*) as total_votes'))
            ->groupBy('answer_id')
            ->orderByDesc('total_votes')
            ->get();

        // Passer les résultats à la vue
        return view('results', ['results' => $results]);
    }

    public function repondrevote()
    {
        // Récupérer le dernier question depuis db
        $lastQuestion = Question::latest()->first();

        if ($lastQuestion) {
            // Récup rép correspondantes à la dernière question
            $options = Answer::where('question_id', $lastQuestion->id)->get();

            return view('vote', compact('lastQuestion', 'options'));
        } else {

            return redirect()->back()->with('error', 'Aucun vote disponible actuellement.');
        }
    }

    public function results()
    {
        return view('results');
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

    public function showResults()
{
    // Récupérer les résultats du vote depuis la base de données
    $results = Vote::select('answer_id', DB::raw('COUNT(*) as total_votes'))
                    ->groupBy('answer_id')
                    ->orderByDesc('total_votes')
                    ->get();

    // Afficher la vue des résultats avec les résultats du vote
    return view('results', ['results' => $results]);
}

    public function contact()
    {
        return view('contact');
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

    //épreuves
    public function epreuves()
    {
        return view('epreuves');
    }

    public function robindesbois()
    {
        return view('robindesbois');
    }

    //participants

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
        return view('participants/sofia');
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
