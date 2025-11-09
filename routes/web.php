<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;


Route::get('/',[ArticleController::class, 'index'])->name('home.index');
Route::get('/detail/{slug}',[ArticleController::class, 'detail'])->name('detail');
Route::get('/category/{categorySlug}',[CategoryController::class, 'index'])->name('category');
Route::prefix('writer')->group(function () {
    Route::get('/',[WriterController::class,'index'])->name('writer.all');
    Route::get('/{writerId}',[WriterController::class,'getWriter'])->name('writer.get');
});

Route::get('/about',function(){
    return view('pages.aboutUs');
})->name('about');
