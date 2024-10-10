@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h3><a href="/articles/{{ $article->id }}">{{ $article->name }}</a></h3>
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
@endsection
