<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserControllerApi;

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

//User Data and Api
Route::get('/user-listings', [UserControllerApi::class, 'userlistings']);
Route::get('/user-profile/{id}', [UserControllerApi::class, 'userProfile']);
Route::post('/user-profile/{id}', [UserControllerApi::class, 'updateProfile']);
