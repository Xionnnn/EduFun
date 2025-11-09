<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($categorySlug){
        if($categorySlug == 'Interactive-Multimedia'){
            $category = Category::where('name', 'Interactive Multimedia')->first();
        } else{
            $category = Category::where('name', 'Software Engineering')->first();
        }

        $articles = Article::where('category_id', $category->id)
                        ->with('writer')
                        ->get();

        $categoryName = $category->name;

        return view('pages.categoryPage', compact('articles', 'categoryName'));
    }
}
