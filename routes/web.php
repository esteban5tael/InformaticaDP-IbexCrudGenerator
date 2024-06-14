<?php

use App\Http\Controllers\_SiteController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', _SiteController::class)->name('index');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dasboard');

    Route::resource('contacts', ContactController::class)->names('admin.contacts');

})->middleware('auth');


