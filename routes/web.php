<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleFileController;

Auth::routes();



// Route::get('/', function () {
//     return view('homepage.org');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/org', [App\Http\Controllers\HomeController::class, 'org']);
Route::get('/committee', [App\Http\Controllers\HomeController::class, 'committee']);
Route::get('/partners', [App\Http\Controllers\HomeController::class, 'partners']);
Route::get('/workshops', [App\Http\Controllers\HomeController::class, 'workshops']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route prefix Articles
Route::prefix('/Articles')->controller(ArticleController::class)->name('Articles.')->group(function(){
    Route::get('/getArticle','getArticle')->name('getArticle');
    Route::get('/ArticleStatus/{id}','ArticleStatus')->name('ArticleStatus');
});

//route resource Articles
Route::resource('Articles',  ArticleController::class);
// Route::resource('Articles',  ArticleController::class)->middleware(['CheckLogin']);


//route prefix Writers
Route::prefix('/Writers')->controller(WriterController::class)->name('Writers.')->group(function(){
    // Route::get('/writerSave/{id}','writerSave')->name('writerSave');
    Route::get('/writerSave/{id}/show', 'writerSave')->name('writerSave');
    Route::post('/writerSave/{id}/show', 'store')->name('writerStore');
    Route::get('/getWritersByID/{article}','getWritersByID');
    Route::get('/getEmailWriter/{email}','getEmailWriter')->name('getEmailWriter');
});

//route resource Writers
Route::resource('Writers',  WriterController::class);


//route prefix ArticleFiles
Route::prefix('/ArticleFiles')->controller(ArticleFileController::class)->name('ArticleFiles.')->group(function(){
    Route::get('/getArticleFileByID/{article}','getArticleFile')->name('getArticleFile');
});
//route resource ArticleFiles
Route::resource('ArticleFiles',  ArticleFileController::class);


require_once 'admin.php';
