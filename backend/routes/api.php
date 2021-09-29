<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegistroController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('registroBiologico')->group(function () {
    Route::get('/',[ RegistroController::class, 'getAll']);
    Route::post('/',[ RegistroController::class, 'create']);
    Route::delete('/{id}',[ RegistroController::class, 'delete']);
    Route::get('/{id}',[ RegistroController::class, 'get']);
    Route::put('/{id}',[ RegistroController::class, 'update']);
});