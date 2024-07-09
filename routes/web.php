<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user/', function() {
    return view("users.panel");
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
