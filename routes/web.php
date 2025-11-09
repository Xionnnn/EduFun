<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
//Route::get('/', function () {
//    return view('pages.homePage');
//});
//Route::get('/aboutUs', function () {
//    return view('pages.aboutUs');
//});
//Route::get('/detail', function () {
//    return view('pages.detailPage');
//});
//Route::get('/writer', function () {
//    return view('pages.writerPage');
//});
//Route::get('/writerDetail', function () {
//    return view('pages.writerDetail');
//});

Route::get('/',[ArticleController::class, 'index'])->name('home.index');
Route::get('/detail/{slug}',[ArticleController::class, 'detail'])->name('detail');
Route::get('/category/{categoryId}',[CategoryController::class, 'index'])->name('category');
Route::prefix('writer')->group(function () {
    Route::get('/',[WriterController::class,'index'])->name('writer.all');
    Route::get('/{writerId}',[WriterController::class,'getWriter'])->name('writer.get');
});

