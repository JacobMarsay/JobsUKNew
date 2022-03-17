<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\UserApplicationController;

use App\Http\Controllers\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Get login page
Route::get('/', [LoginController::class, "index"]);
Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');

//show registration index page
Route::get('users/registration-index', function () {
    return view('users/registration-index');
});

//show company registration form
Route::get('/company-registration', [RegisterController::class, "showCompanyRegistrationForm"]);

//Information submited on comapny registration
Route::post('/company-registration', [RegisterController::class, "registerCompanyAccount"])->name('storeCompanyAccount');;

//show Jobseeker registration form
Route::get('/jobseeker-registration', [RegisterController::class, "showJobSeekerRegistrationForm"]);

//Information submited on jobseeker registration
Route::post('/jobseeker-registration', [RegisterController::class, "registerJobSeekerAccount"])->name('storeJobSeekerAccount');

//Authenticates JobSeeker to JobSeeker dashboard
Route::resource('/applications', ApplicationController::class)->middleware('auth');

//Authenticates Company to Company dashboard
Route::resource('/posts', JobPostController::class)->middleware('auth');

//ADDS CRUD functionality to a user application
Route::resource('/application', UserApplicationController::class)->middleware('auth');



//Ends users session
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');



