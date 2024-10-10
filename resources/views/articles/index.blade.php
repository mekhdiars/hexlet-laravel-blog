@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h3>{{ $article->name }}</h3>
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
@endsection
