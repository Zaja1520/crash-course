<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [JobController::class, 'joblistings'])->name('index');
//user routes
Route::get('/user-listings', [UserController::class, 'userlistings']);
Route::get('/user-profile/{id}', [UserController::class, 'userProfile']);
Route::post('/user-profile/{id}', [UserController::class, 'updateProfile']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

//Job listing routes
// show all job listings
Route::get('/job-listings', [JobController::class, 'joblistings']);
// show only 1 job profile
Route::get('/job-info/{id}', [JobController::class, 'jobProfile'])
->middleware('auth');    
// job listing form
Route::get('/job-listings/create', [JobController::class, 'createJob'])->name('createJob')
->middleware('auth');
// go to storeJob controller
Route::post('/job-listings/create', [JobController::class, 'storeJob'])
->middleware('auth');
// go to edit job list
Route::get('/job-listings/edit/{id}', [JobController::class, 'editJob'])->name('edit-job')
->middleware('auth');
// go to edit submit process
Route::post('/job-listings/edit/{id}', [JobController::class, 'updateJob']);
//delete listings
Route::delete('/job-listings/delete/{id}', [JobController::class, 'deleteJob'])->name('delete-job')
->middleware('auth');

// Authentication routes
Route::get('/registration', [AuthController::class, 'registerUser'])->name('registration')
->middleware('guest');
Route::post('/registration', [AuthController::class, 'registerProcess']);
//logout route 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//login route
Route::get('/login', [AuthController::class, 'loginUser'])->name('login')
->middleware('guest');
//login process
Route::post('/login', [AuthController::class, 'loginProcess']);
//manage jobs route
Route::get('/manage/jobs', [JobController::class, 'manageJobs'])->name('manage-jobs')
->middleware('auth');