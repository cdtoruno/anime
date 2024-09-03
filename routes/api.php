<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::apiResource('animes', AnimeController::class);
