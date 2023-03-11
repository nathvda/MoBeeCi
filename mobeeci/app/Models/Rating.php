<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = [
        'location_id',
        'sensitive_rating',
        'population_rating',
        'pmr_rating'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

}
