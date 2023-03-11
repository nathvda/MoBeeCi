<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $fillable = [
        'adress',
        'city',
        'postal_code'
    ];

    public function suggest()
    {
        return $this->hasMany(Suggest::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function alert()
    {
        return $this->hasMany(Alert::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
