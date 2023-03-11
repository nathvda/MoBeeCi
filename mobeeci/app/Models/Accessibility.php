<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accessibility extends Model
{
    use HasFactory;

    protected $table = 'accessibilities';

    protected $fillable = [
        'pmr',
        'sensorial_sensitive',
        'population_tolerance',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
