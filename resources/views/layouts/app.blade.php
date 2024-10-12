<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <a href="{{ route('main') }}">Главная</a>
    <a href="{{ route('articles.index') }}">Статьи</a>
    <a href="{{ route('articles.create') }}">Новая статья</a>
</header>
<div class="container mt-4">
    <h1>@yield('header')</h1>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
