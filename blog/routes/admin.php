<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', PanelController::class)->name('panel');
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::fallback(function () {
    return view('admin.errors.404');
});

