<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//all routes / api here must be api authenticated
Route::post('login', [\App\Http\Controllers\Api\Auth\AuthController::class,'login']);
Route::post('logout', [\App\Http\Controllers\Api\Auth\AuthController::class,'logout'])->middleware(['api','XssSanitizer','auth.guard:api-jwt']);
//
//Route::middleware(['auth:sanctum','XssSanitizer' ])->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
