<?php

// app/Models/Vote.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Vote extends Model
{
    use HasFactory;
    protected $table = 'vote'; // Assuming the table name is 'votes'
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}