@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <a href="{{ route('articles.edit', $article) }}">Изменить</a>
    <a href="{{ route('articles.destroy', $article) }}" data-method="delete" rel="nofollow">Удалить</a>
@endsection
