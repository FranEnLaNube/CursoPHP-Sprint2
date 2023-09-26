<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;
    /**
     * Define the relationship where Population belongs to a Province.
     */
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}
