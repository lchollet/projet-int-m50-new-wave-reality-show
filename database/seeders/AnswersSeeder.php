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
            'Song Answer 1',
            'Movie Answer 1',
            'Book Answer 1',
            'Food Answer 1',
            'Hobby Answer 1',
            'Place Answer 1',
            'Sport Answer 1',
            'Season Answer 1',
            'TV Show Answer 1',
            'Color Answer 1',
            'Animal Answer 1',
            'Band/Artist Answer 1',
            'Vacation Destination Answer 1',
            'Memory Answer 1',
            'Weekend Activity Answer 1',
            'School Subject Answer 1',
            'Music Type Answer 1',
            'Childhood Game Answer 1',
            'Relaxation Answer 1',
        ];

        // Inserting data into the table
        foreach ($answers as $answerData) {
            DB::table('answer')->insert([
                'question_id' => rand(1, count($answers)), // Assuming question IDs are sequential starting from 1
                'answer' => $answerData,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
