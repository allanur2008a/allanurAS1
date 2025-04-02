<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;

Route::get('/users',[UserController::class,'index']);

Route::resource('users', UserController::class);
Route::resource('cities', CityController::class);
Route::resource('restaurants',RestaurantController::class);
Route::resource('reservations',ReservationController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products',ProductController::class);
