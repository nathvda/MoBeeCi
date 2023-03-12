<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLocationRequest;

class LocationController extends Controller
{
    public function index()
    {
        $response = Location::latest()->get();

        return response()->json([
            'ratings' => $response
        ], 200);
        
    }

    public function create(){
        return view('locations.create');
    }

    public function show($id){
        return view('locations.show', ['location' => Location::find($id), 
        'pmr_rating' => Location::find($id)->rating->avg('pmr_rating'),
        'sensitive_rating' => Location::find($id)->rating->avg('sensitive_rating'),
        'population_rating' => Location::find($id)->rating->avg('population_rating')]);    }


    public function store(CreateLocationRequest $request)
    {
        Location::create([
            'adress' => $request['adress'],
            'city' => $request['city'],
            'postal_code' => $request['postal_code'],
        ]);
    }
}
