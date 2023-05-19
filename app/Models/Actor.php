<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Illuminate\Database\Eloquent\Model
{
    /**
     * Get the movies associated with the actor.
     */
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}

