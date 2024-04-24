<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        // création des données
        $questions = [
            'Quel personne devrait être dans la chambre pas confort ?',
        ];




        // insertion des données dans la table
        foreach ($questions as $questionsData) {

            DB::table('question')->insert([
                'text_question' => $questionsData,
                'start_date' => now(),
                'end_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
