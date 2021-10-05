<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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
Route::middleware(['cors', 'json.response'])->group(function(){
Route::post('signup', [AuthController::class,'signup']);
Route::post('login', [AuthController::class,'login']);
});
//add this middleware to ensure that every request is authenticated
Route::middleware(['auth:api', 'cors', 'json.response'])->group(function(){
    Route::get('user', [AuthController::class,'authenticatedUserDetails']);
});
