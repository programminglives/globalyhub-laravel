<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\ApiTokenController;

Route::post('/sanctum/token', [ApiTokenController::class, 'issueToken']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/notifications', [NotificationController::class, 'publish']);
});
Route::patch('/notifications/{id}/status', [NotificationController::class, 'updateStatus']);
