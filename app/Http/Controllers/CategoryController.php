<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($categoryId){
        $articles = Article::where('category_id', $categoryId)
                        ->with('writer')
                        ->get();
        $category = Category::where('id', $categoryId)->value('name');
        return view('pages.categoryPage', compact('articles', 'category'));
    }
}
