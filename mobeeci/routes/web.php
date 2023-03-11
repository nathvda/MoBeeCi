<?php

use App\Models\Location;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuggestController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['locations' => Location::get()]);
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

/** Route d'alertes spécifique */
Route::get('/alerts', [AlertController::class, 'index']);

Route::get('/alerts/new', [AlertController::class, 'create']);

Route::post('/alerts', [AlertController::class, 'store']);

/** Route de suggestions spécifique */
Route::get('/suggestions', [SuggestController::class, 'index']);

Route::get('/suggestions/new', [SuggestController::class, 'create']);

Route::post('/suggestions', [SuggestController::class, 'store']);

/** Route de rating spécifique */
Route::get('/locations', [LocationController::class, 'index']);

Route::post('/locations', [LocationController::class, 'store']);

Route::get('/profile', [LocationController::class, 'index']);

Route::get('/flux', function(){

    // $opts = [
    //     "http" => [
    //         "method" => "GET",
    //         "header" => array("Authorization:Bearer $_ENV['PROXITOKEN']",
    //             "Accept:application/json",
    //             "Content-Type:application/json")
    //     ]
    // ];

    // $context = stream_context_create($opts);
    
    // $response = file_get_contents('https://api.enco.io/rtcm/1.0.0/zones/Charleroi_ring/geojson', false, $context);

    // $opts = [
    //     "http" => [
    //         "method" => "GET",
    //         "header" => array("Authorization:Bearer $_ENV['PROXITOKEN']",
    //             "Accept:application/json",
    //             "Content-Type:application/json")
    //     ]
    // ];

    // $context = stream_context_create($opts);
    
    // return file_get_contents('https://api.enco.io/rtcm/1.0.0/zones/Charleroi_ring/', false, $context);


    // return response()->json([
    //     'data' => $response
    // ], 200);
});

