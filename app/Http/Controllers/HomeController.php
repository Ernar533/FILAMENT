<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use App\Models\Article;
class HomeController extends Controller
{
    public function index() {
        $pageTitle = 'Главная';
        $latestArticles = Article::where('active', true)
            ->latest('published_at')
            ->take(5)
            ->get();
    
        $articles = Article::where('active', true)
            ->with('category')
            ->latest('published_at')
            ->paginate(6);
    
        return view('index', compact('articles', 'latestArticles', 'pageTitle'));
    }
    
}
