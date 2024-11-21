<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('email/verify/view/{id}/{hash}', [VerifyController::class, 'viewEmail'])->name('email.verification.view');
Route::get('password/reset/view/{email}/{token}', [VerifyController::class, 'viewInBrowser'])->name('password.reset.view');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'LoginForm'])->name('login');

    Route::post('/login-user', [AuthController::class, 'login'])->name('login-user')->middleware('throttle:login-user');

    Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup');

    Route::post('/register-user', [AuthController::class, 'register'])->name('register-user');

    Route::get('/forgot-password', [VerifyController::class, 'forgotPass'])->name('password.request');

    Route::post('/forgot-password/email', [VerifyController::class, 'resetPassLink'])->name('password.email');

    Route::get('/reset-password/{token}', [VerifyController::class, 'resetPassForm'])->name('password.reset');

    Route::post('/reset-password/new', [VerifyController::class, 'NewPassword'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [VerifyController::class, 'showNotice'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->middleware(['signed', 'throttle:6,1'])->withoutMiddleware(['auth'])->name('verification.verify');

    Route::post('/email/verification-notification', [VerifyController::class, 'ResentEmail'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
