<?php

use App\Http\Controllers\Auth\SocialLoginController;

Route::get('/', function () { return redirect('/login'); });

Route::get('/login', function () { return view('auth.login'); })->name('login');

// Routes cho Social Login
Route::get('/auth/{provider}/redirect', [SocialLoginController::class, 'redirect'])->name('social.redirect');
Route::get('/auth/{provider}/callback', [SocialLoginController::class, 'callback'])->name('social.callback');
Route::post('/logout', [SocialLoginController::class, 'logout'])->name('logout');

// Route hiển thị thông tin (Yêu cầu đăng nhập)
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');