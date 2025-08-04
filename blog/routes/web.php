<?php


use App\Http\Controllers\FrontEnd\ArticleController;
use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/article/{id}', [ArticleController::class,'article'])->name('article');
Route::get('/articles', [ArticleController::class,'articles'])->name('articles');
Route::fallback(function () {
    return view('frontend.errors.404');
});



