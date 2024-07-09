<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/Articles')->controller(ArticleController::class)->name('Articles.')->group(function(){

    Route::get('/getArticle','getArticle');

});


Route::resource('Articles',  ArticleController::class);


