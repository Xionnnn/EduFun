<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        //Yang ditampilkan hanya 3 article terbaru
        $articles = Article::orderBy('created_at', 'desc')
                            ->with('writer')
                            ->take(3)
                            ->get();
        return view('pages.homePage', compact('articles'));
    }

    public function detail($slug){
        $article = Article::where('slug', $slug)
                        ->with('writer')
                        ->first();

        return view('pages.detailPage', compact('article'));
    }
}
