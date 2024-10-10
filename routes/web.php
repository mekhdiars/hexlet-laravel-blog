<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('about', [PageController::class, 'about']);

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');
