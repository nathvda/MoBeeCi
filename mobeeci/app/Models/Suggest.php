<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    use HasFactory;

    protected $table = "suggests";

    protected $fillable = [
        'description',
        'category',
        'location_id'
    ];
}
