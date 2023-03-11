<?php

namespace App\Http\Controllers;

use App\Models\Suggest;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSuggestRequest;

class SuggestController extends Controller
{
    public function index()
    {
        return view('suggestions.index');
    }

    public function create(){
        return view('suggestions.create');
    }

    public function store(CreateSuggestRequest $request)
    {
        Suggest::create([
            'description' => $request['description'],
            'location_id' => $request['location_id'],
            'category' => $request['category']
        ]);
    }
}
