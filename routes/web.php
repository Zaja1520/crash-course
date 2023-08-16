<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
// use App\Http\Controllers\Api\JobControllerApi;

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
});
//user controller
Route::get('/user-listings', [UserController::class, 'userlistings']);
Route::get('/user-profile/{id}', [UserController::class, 'userProfile']);
Route::post('/user-profile/{id}', [UserController::class, 'updateProfile']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

//Job listing controller
Route::get('/job-listings', [JobController::class, 'joblistings']);
Route::get('/job-info/{id}', [JobController::class, 'jobProfile']);    