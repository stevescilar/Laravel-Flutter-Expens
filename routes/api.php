<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Auth Routes
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->action('api.auth.register');
    Route::post('/login', 'login')->action('api.auth.login');
    //Route::post('/logout', 'logout')->middleware('auth:sanctum');
});