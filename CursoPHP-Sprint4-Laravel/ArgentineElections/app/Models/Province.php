<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    /**
     * Define a one-to-many relationship with the Vote model.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class, 'province_id', 'id');
    }
    /**
     * Define a one-to-many relationship with the Population model.
     */
    public function population()
    {
        return $this->hasMany(Population::class, 'province_id', 'id');
    }
}
