<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; // Import the ProjectController



Route::get('/',[ProjectController::class, 'index']);
