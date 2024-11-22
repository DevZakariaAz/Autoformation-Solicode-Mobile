<?php

namespace App\Http\Controllers;
use App\Models\Article;

class AdminController extends Controller
{
    public function dashboard()
    {
        $articles = Article::all();
        return view('admin.dashboard', compact('articles'));
    }
}