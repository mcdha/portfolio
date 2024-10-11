<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\ProjectController; // Import the ProjectController
use App\Http\Controllers\GetInTouchController;




Route::get('/',[GlobalController::class, 'index']);


Route::post('/get-in-touch', [GetInTouchController::class, 'submit'])->name('getintouch.submit');