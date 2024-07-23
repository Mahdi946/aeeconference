<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LocationController;



//route resource Location
Route::resource('Admin/Location',  LocationController::class);

