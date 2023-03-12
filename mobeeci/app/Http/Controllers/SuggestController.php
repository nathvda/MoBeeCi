<?php

namespace App\Http\Controllers;

use App\Models\Suggest;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSuggestRequest;

class SuggestController extends Controller
{
    public function index()
    {
        return view('suggestions.index', ['suggestions' => Suggest::latest()->get()]);
    }

    public function create(){
        return view('suggestions.create', ['locations' => Location::get()]);
    }

    public function store(CreateSuggestRequest $request)
    {
        Suggest::create([
            'description' => $request['description'],
            'location_id' => $request['location_id'],
            'category' => $request['category']
        ]);

        return redirect('/suggestions');
    }
}
