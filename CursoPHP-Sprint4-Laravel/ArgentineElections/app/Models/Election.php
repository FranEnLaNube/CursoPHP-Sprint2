<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;
    /**
     * Define the relationship between Election and Alternative through votes.
     */
    public function elections_votes_alternatives()
    {
        return $this->belongsToMany(Alternative::class, 'votes')
            ->withPivot('quantity'); // To get votes quantity in the relation
    }
    /**
     * Define the relationship between Election and Province through votes.
     */
    public function elections_votes_provinces()
    {
        return $this->belongsToMany(Province::class, 'votes')
            ->withPivot('quantity'); // To get votes quantity in the relation
    }
}
