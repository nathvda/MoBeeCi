<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAlertRequest;

class AlertController extends Controller
{
    public function index()
    {
        return view('alert.index', ['alerts' => Alert::latest()->get()]);

    }

    public function create(){
        return view('alert.create');
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
