<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SuggestController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/** Route d'alertes spécifique */
Route::get('/alerts', [AlertController::class, 'index']);

Route::middleware('auth:sanctum')->post('/alerts', [AlertController::class, 'store']);

/** Route de suggestions spécifique */
Route::get('/suggestions', [SuggestController::class, 'index']);

Route::middleware('auth:sanctum')->post('/suggestions', [SuggestController::class, 'store']);

/** Route de rating spécifique */
Route::get('/ratings', [RatingController::class, 'index']);

Route::middleware('auth:sanctum')->post('/ratings', [RatingController::class, 'store']);

/** Route de rating spécifique */
Route::get('/locations', [LocationController::class, 'index']);

Route::middleware('auth:sanctum')->post('/locations', [LocationController::class, 'store']);




