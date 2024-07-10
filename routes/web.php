<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\WriterController;
use App\Http\Controllers\web\ArticleController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/Articles')->controller(ArticleController::class)->name('Articles.')->group(function(){

    Route::get('/getArticle','getArticle');

});


Route::resource('Articles',  ArticleController::class);



Route::prefix('/Writers')->controller(WriterController::class)->name('Writers.')->group(function(){

    // Route::get('/writerSave/{id}','writerSave')->name('writerSave');
    Route::get('/writerSave/{id}/show', 'writerSave')->name('writerSave');
    Route::get('/getWriterByID/{article}','getWriterByID');
    Route::get('/getEmailWriter/{email}','getEmailWriter')->name('getEmailWriter');

});

Route::resource('Writers',  WriterController::class);


