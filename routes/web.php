<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// Route to display the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');

// Route to handle the form submission (POST request)
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Route to get states based on country
Route::get('/get-states/{country_id}', [RegisterController::class, 'getStatesByCountry']);

// Route to get cities based on state
Route::get('/get-cities/{state_id}', [RegisterController::class, 'getCitiesByState']);

