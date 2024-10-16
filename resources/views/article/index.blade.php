@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    {{ session('status') }}
    @foreach ($articles as $article)
        <h3><a href="{{ route('articles.show', $article) }}">{{ $article->name }}</a></h3>
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
@endsection
