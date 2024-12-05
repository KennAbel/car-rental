<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('cars', CarController::class);

// Route for renting a car
Route::post('rent/{id}', [RentalController::class, 'store'])->name('rent');

// Route for rental history
Route::get('history', [RentalController::class, 'index'])->name('history')->middleware('auth');

Route::get('/rentals', [RentalController::class, 'index'])
    ->middleware('auth') // Ensure the user is authenticated
    ->name('rentals.index'); // Name the route for easier reference