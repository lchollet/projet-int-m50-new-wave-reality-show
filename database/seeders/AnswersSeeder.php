<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample answers for each question
        $answers = [
            'Sofia',
            'Omar',
            'Sacha',
            'Vitor',
            'Didier',
        ];

        // Inserting data into the table
        foreach ($answers as $answerData) {
            DB::table('answer')->insert([
                'question_id' => (1),
                'answer' => $answerData,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
