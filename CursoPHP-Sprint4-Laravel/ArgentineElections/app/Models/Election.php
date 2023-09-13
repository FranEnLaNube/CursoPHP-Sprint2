<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;
    /**
     * Define a one-to-many relationship with the Population model.
     */
    public function populations()
    {
        return $this->hasMany(Population::class);
    }
    /**
     * Define a one-to-many relationship with the Vote model.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
