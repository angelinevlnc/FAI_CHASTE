<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FoodController::class, 'getLanding']);


Route::get('/kos', function () {
    return view('kos');
});

Route::get('/kos-detail', function () {
    return view('kos-detail');
});


Route::get('/kos-invoice', function () {
    return view('kos-invoice');
});

Route::get('/food', [FoodController::class, 'getFood']);

Route::get('/food-payment', function () {
    return view('food-payment');
});
