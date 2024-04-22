<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/registrationform', function () {
    return view('frontend.pages.registrationform');
})->name('registration');

Route::get('/result', function () {
    return view('frontend.pages.result');
})->name('result');


