<?php

namespace App\Http\Controllers;

use App\Models\Suggest;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSuggestRequest;

class SuggestController extends Controller
{
    public function index()
    {
        $response = Suggest::latest()->get();

        return response()->json([
            'suggestions' => $response
        ], 200);
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
