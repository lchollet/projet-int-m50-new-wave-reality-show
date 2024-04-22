<?php

// app/Models/VoteOption.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteOption extends Model
{
    protected $table = 'vote_options'; // Assuming the table name is 'vote_options'

    protected $fillable = ['text']; // Fillable fields

    // Define the relationship with Vote
    public function vote()
    {
        return $this->belongsTo(Vote::class);
    }
}
