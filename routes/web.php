<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $params = 'yuuuuu';
    return view('welcome', ['params' => $params]);
});

Route::get('about', function () {
    $tags = ['обучение', 'программирование', 'php', 'oop'];
    return view('about', ['tags' => $tags]);
});
