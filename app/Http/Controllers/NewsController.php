<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::published()
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $featuredNews = News::published()
            ->featured()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('news.index', compact('news', 'featuredNews'));
    }

    public function show($slug)
    {
        $article = News::where('slug', $slug)->firstOrFail();
        
        // Tăng lượt xem
        $article->incrementViews();

        // Tin tức liên quan
        $relatedNews = News::published()
            ->where('id', '!=', $article->id)
            ->where('category', $article->category)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('news.show', compact('article', 'relatedNews'));
    }
}
