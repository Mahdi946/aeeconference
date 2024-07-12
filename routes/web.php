<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\WriterController;
use App\Http\Controllers\web\ArticleController;
use App\Http\Controllers\web\ArticleFileController;

Auth::routes();




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route prefix Articles
Route::prefix('/Articles')->controller(ArticleController::class)->name('Articles.')->group(function(){
    Route::get('/getArticle','getArticle')->name('getArticle');
});

//route resource Articles
Route::resource('Articles',  ArticleController::class);


//route prefix Writers
Route::prefix('/Writers')->controller(WriterController::class)->name('Writers.')->group(function(){
    // Route::get('/writerSave/{id}','writerSave')->name('writerSave');
    Route::get('/writerSave/{id}/show', 'writerSave')->name('writerSave');
    Route::get('/getWriterByID/{article}','getWriterByID');
    Route::get('/getEmailWriter/{email}','getEmailWriter')->name('getEmailWriter');
});

//route resource Writers
Route::resource('Writers',  WriterController::class);


//route prefix ArticleFiles
Route::prefix('/ArticleFiles')->controller(ArticleFileController::class)->name('ArticleFiles.')->group(function(){
    Route::get('/getArticleFile','getArticleFile')->name('getArticleFile');
});
//route resource ArticleFiles
Route::resource('ArticleFiles',  ArticleFileController::class);


