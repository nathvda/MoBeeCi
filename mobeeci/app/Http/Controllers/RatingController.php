<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRatingRequest;

class RatingController extends Controller
{
    public function index()
    {
        $response = Rating::latest()->get();

        return response()->json([
            'ratings' => $response
        ], 200);
        
    }

    public function create(){

        return view('rating.create');
        
    }

    public function store(CreateRatingRequest $request)
    {
        Rating::create([
            'location_id' => $request['location_id'],
            'sensitive_rating' => $request['sensitive_rating'],
            'population_rating' => $request['population_rating'],
            'pmr_rating' => $request['pmr_rating']
        ]);
    } 
}
