<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vote extends Model
{
    // Set the colums that form the primary key
    protected $primaryKey = ['election_id', 'province_id', 'alternative_id'];
    public $incrementing = false;

    use HasFactory;

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function alternative()
    {
        return $this->belongsTo(Alternative::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    protected $fillable = [
        'election_id',
        'province_id',
        'alternative_id',
        'quantity'
    ];
}
