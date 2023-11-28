<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/WaitingList', function () {
    return view('waitingList');
});

Route::get('/BorrowedBooks', function () {
    return view('dashboard');
});

Route::get('/History', function () {
    return view('waitingList');
});
