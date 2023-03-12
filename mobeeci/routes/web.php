<?php

use App\Http\Controllers\AccessibilityController;
use App\Models\Location;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuggestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LocationController;

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
    return view('welcome');
})->middleware('auth');

Route::get('/home', function(){
    return view('home');
},  ['locations' => Location::get()])->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

/** Route d'alertes spécifique */
Route::get('/alerts', [AlertController::class, 'index'])->middleware('auth');

Route::get('/alerts/new', [AlertController::class, 'create'])->middleware('auth');

Route::post('/alerts', [AlertController::class, 'store'])->middleware('auth');

/** Route de suggestions spécifique */
Route::get('/suggestions', [SuggestController::class, 'index'])->middleware('auth');

Route::get('/suggestions/new', [SuggestController::class, 'create'])->middleware('auth');

Route::post('/suggestions', [SuggestController::class, 'store'])->middleware('auth');

/** Route de rating spécifique */
Route::get('/locations', [LocationController::class, 'index'])->middleware('auth');

Route::get('/locations/{location}', [LocationController::class, 'show'])->middleware('auth');

Route::get('/locations/new', [LocationController::class, 'create'])->middleware('auth');

Route::post('/locations', [LocationController::class, 'store'])->middleware('auth');

Route::get('/profile', [RegisterController::class, 'index'])->middleware('auth');

Route::get('/preferences', [AccessibilityController::class, 'index'])->middleware('auth');

Route::get('/flux', function(){
    $env = $_ENV['PROXITOKEN'];

    $opts = [
        "http" => [
            "method" => "GET",
            "header" => array("Authorization:Bearer $env",
                "Accept:application/json",
                "Content-Type:application/json")
        ]
    ];

    $context = stream_context_create($opts);
    
    $response = file_get_contents('https://api.enco.io/rtcm/1.0.0/zones/Charleroi_ring/geojson', false, $context);

    $infos = json_decode($response, true);

    // dd($infos);

    $stuff = json_decode(config('const'), true);

        $gridData = [];

        foreach($infos['features'] as $res=>$value){

            $gridCell = [];
            
            echo $value['properties']['cellcode'] . "<br>";
            echo $stuff['data'][$res]['binId'] . "<br>";

            $density =  $stuff['data'][$res]['national'] + $stuff['data'][$res]['international'];

            if  ($density >= 150){
                echo 'Dangerously numerous people'  . "<br>";
            } else if ($density >= 80){
                echo 'Too many people'  . "<br>";
            } else if ($density >= 20){
                echo 'Okay time' . "<br>";
            }

            $gridCell = $value['geometry']['coordinates'][0];


            $gridData[] = $gridCell;

        }

        dd($gridData);


    // $spouet = [
    //     "http" => [
    //         "method" => "GET",
    //         "header" => array("")
    //     ]
    // ];

    // $context = stream_context_create($spouet);
    
    // $doudou = file_get_contents('https://kara.rest/bin/e57fb926-f926-403f-b7a2-90a50d59b451', true);  
    
    // dd($doudou);

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

