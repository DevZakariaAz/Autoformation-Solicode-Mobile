<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        // Paginate the articles, showing 10 articles per page
        $articles = Article::paginate(10);
        return view('articles.index', compact('articles'));
    }

    public function create() {
        return view('articles.create');
    }

    public function edit(Article $article) {
        return view('articles.edit', compact('article'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'categorie' => 'nullable|string|max:255', // Validate `categorie`
        ]);

        Article::create($validated);
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }
    
    public function show(Article $article) {
        return view('articles.show', compact('article'));
    }

    public function update(Request $request, Article $article) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'categorie' => 'nullable|string|max:255', // Validate `categorie`
        ]);

        $article->update($validated);
        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }


    public function destroy(Article $article) {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
