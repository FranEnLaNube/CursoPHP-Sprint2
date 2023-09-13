<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;
    /**
     * Define a one-to-many relationship with the Vote model.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
