<?php

// app/Models/Vote.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'votes'; // Assuming the table name is 'votes'

    protected $fillable = ['title', 'start_date', 'end_date']; // Fillable fields

    // Define the relationship with VoteOption
    public function options()
    {
        return $this->hasMany(VoteOption::class);
    }
}