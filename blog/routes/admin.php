<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', PanelController::class)->name('panel');
Route::resource('users', UserController::class);
Route::fallback(function () {
    return view('admin.errors.404');
});

