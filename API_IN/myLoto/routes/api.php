<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:api')->group(function () {
    // Vos routes API protégées ici
    Route::get('/user-profile', [ApiController::class, 'userProfile']);

});

// Autres routes publiques de l'API
//Route::get('/public-route', [ApiController::class, 'publicRoute']);
Route::get('/getNumberFree', [ApiController::class, 'getNumberFree']);
Route::get('/{key}/getNumber', [ApiController::class, 'getNumberKey']);
Route::get('/getToken', [ApiController::class, 'getTokenR']);
//Route::post('/get-token', [AuthController::class, 'getToken']);


/// HFGUEIE67FGHDS