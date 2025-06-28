<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiTokenController;

Route::post('/sanctum/token', [ApiTokenController::class, 'issueToken']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

