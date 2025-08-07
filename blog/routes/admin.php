<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', PanelController::class)->name('panel');
Route::get('/create_user_roles/{id}', [UserController::class,'createUserRoles'])->name('create_user_roles');
Route::post('/store_user_roles/{id}', [UserController::class,'storeUserRoles'])->name('store_user_roles');
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);
Route::resource('roles', RoleController::class);
Route::fallback(function () {
    return view('admin.errors.404');
});

