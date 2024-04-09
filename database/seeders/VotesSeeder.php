<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample votes
        $votes = [
            true,  // Upvote
            false, // Downvote
            true,  // Upvote
            true,  // Upvote
            false, // Downvote
            true,  // Upvote
            false, // Downvote
            false, // Downvote
            true,  // Upvote
            true,  // Upvote
            true,  // Upvote
            false, // Downvote
            false, // Downvote
            true,  // Upvote
            false, // Downvote
            true,  // Upvote
            true,  // Upvote
            true,  // Upvote
            false, // Downvote
            false, // Downvote
        ];

        // Inserting data into the table
        foreach ($votes as $voteData) {
            DB::table('vote')->insert([
                'vote' => $voteData,
                'question_id' => rand(1, 10), 
                'answer_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
