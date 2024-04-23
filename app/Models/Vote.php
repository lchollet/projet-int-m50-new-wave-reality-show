<?php

// app/Models/Vote.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'vote'; // Assuming the table name is 'votes'

    

    // Define the relationship with VoteOption
    public function options()
    {
        return $this->hasMany(VoteOption::class);
    }
}