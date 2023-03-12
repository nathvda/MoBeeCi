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

    public function store(CreateLocationRequest $request)
    {
        Location::create([
            'adress' => $request['adress'],
            'city' => $request['city'],
            'postal_code' => $request['postal_code'],
        ]);
    }
}
