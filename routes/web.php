<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ActorController::class, 'index'])->name('actors.index');
Route::get('/search', [SearchController::class, 'search'])->name('search');
