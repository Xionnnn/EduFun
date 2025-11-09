<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homePage');
});
Route::get('/aboutUs', function () {
    return view('pages.aboutUs');
});
Route::get('/detail', function () {
    return view('pages.detailPage');
});
Route::get('/writer', function () {
    return view('pages.writerPage');
});
Route::get('/writerDetail', function () {
    return view('pages.writerDetail');
});
