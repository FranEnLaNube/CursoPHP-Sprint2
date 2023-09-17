<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    private const BLANK = 7;
    private const SPOILED = 8;

    use HasFactory;
    /**
     * Define a one-to-many relationship with the Vote model.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    function isBlank(): bool
    {
        return $this->id == self::BLANK;
    }

    function isSpoiled(): bool
    {
        return $this->id == self::SPOILED;
    }
}
