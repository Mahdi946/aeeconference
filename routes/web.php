<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', function() {
    return view("login");
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
