<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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
