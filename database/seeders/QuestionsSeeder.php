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
            'What is your favorite song?',
            'What is your favorite movie?',
            'What is your favorite book?',
            'What is your favorite food?',
            'What is your favorite hobby?',
            'What is your favorite place to visit?',
            'What is your favorite sport?',
            'What is your favorite season?',
            'What is your favorite TV show?',
            'What is your favorite color?',
            'What is your favorite animal?',
            'What is your favorite band or artist?',
            'What is your favorite vacation destination?',
            'What is your favorite memory?',
            'What is your favorite thing to do on weekends?',
            'What is your favorite subject in school?',
            'What is your favorite type of music?',
            'What is your favorite childhood game?',
            'What is your favorite way to relax?',
        ];




        // insertion des données dans la table
        foreach ($questions as $questionsData) {

            DB::table('question')->insert([
                'text_question' => $questionsData,
            ]);
        }
    }
}
