<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('about', [PageController::class, 'about']);

Route::resource('articles', ArticleController::class);
