<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function store(ArticleRequest $request)
    {
//        $data = $request->validate([
//            'name' => 'required|unique:articles',
//            'body' => 'required|min:10',
//        ]);

        $data = $request->validated();

        $article = new Article();
        $article->fill($data);
        $article->save();

        session()->flash('status', 'Article was successful!');

        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);

        $data = $request->validated();

        $article->fill($data);
        $article->save();

        session()->flash('status', 'Article updated successful!');

        return redirect()->route('articles.index');
    }
}
