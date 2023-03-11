<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAlertRequest;

class AlertController extends Controller
{
    public function index()
    {
        $response = Alert::latest()->get();

        return response()->json([
            'alerts' => $response
        ], 200);
        
    }

    public function store(CreateAlertRequest $request)
    {
        Alert::create([
            'type' => $request['type'],
            'description' => $request['description'],
            'location_id' => $request['location_id']
        ]);
    }
}
