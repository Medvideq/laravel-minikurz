<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KontaktController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, "index"]);

Route::get('/info', [KontaktController::class, "index"]);
