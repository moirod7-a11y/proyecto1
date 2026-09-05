<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::orderByDesc("id")->get();
        return view("articles.index", compact("articles"));
    }

    public function create()
    {
        $article = new Article();
        return view("articles.create", compact("article"));
    }


    public function store(ArticleRequest $request)
    {
        Article::create($request->validated());
        return redirect()->route("articles.index")->with("success", "El artículo se creó correctamente.");
    }

    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view("articles.show", compact("article"));
    }

    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view("articles.edit", compact("article"));
    }

    
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->validated());
        return redirect()->route("articles.index")->with("success", "El artículo se ha actualizado correctamente.");
    }

    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route("articles.index")->with("success", "El artículo se ha eliminado correctamente.");
    }
}