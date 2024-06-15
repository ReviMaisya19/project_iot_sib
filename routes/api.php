<?php

use App\Http\Controllers\Api\TemperatureController;
use App\Http\Controllers\Api\HumidityController;
use App\Http\Controllers\Api\IntensityController;
use App\Http\Controllers\Api\MoistureController;
use App\Http\Controllers\Api\SensorController;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/temperatures', [TemperatureController::class, 'store']); 

Route::post('/humidities', [HumidityController::class, 'store']); 

Route::post('/intensities', [IntensityController::class, 'store']); 

Route::post('/moistures', [MoistureController::class, 'store']); 

Route::apiResource('/sensors', SensorController::class);
//Route::get('/sensors', [SensorController::class, 'index']); 
//Route::post('/sensors', [SensorController::class, 'store']);