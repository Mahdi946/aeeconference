<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\WriterController;
use App\Http\Controllers\web\ArticleController;

Route::get('/', function () {
    return view('home-fa');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/Articles')->controller(ArticleController::class)->name('Articles.')->group(function(){

    Route::get('/getArticle','getArticle');

});


Route::resource('Articles',  ArticleController::class);



Route::prefix('/Writers')->controller(WriterController::class)->name('Writers.')->group(function(){

    Route::get('/getWriterByID/{article}','getWriterByID');
    Route::post('/getEmailWriter','getEmailWriter')->name('getEmailWriter');

});

Route::resource('Writers',  WriterController::class);


