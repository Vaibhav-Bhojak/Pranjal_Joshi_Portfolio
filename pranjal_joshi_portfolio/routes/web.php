<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('home')->group(function () {
    Route::get('about', [HomeController::class, 'about'])->name('home.about');
    Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('services', [HomeController::class, 'services'])->name('home.services');
    Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('home.privacy_policy');
    Route::get('terms-of-service', [HomeController::class, 'termsOfService'])->name('home.terms_of_service');
    Route::get('disclaimer', [HomeController::class, 'disclaimer'])->name('home.disclaimer');
    Route::resource('home', HomeController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/appointments', [AdminController::class, 'list'])->name('list');
        Route::resource('/', AdminController::class)->parameters(['' => 'admin']);
    });
});
