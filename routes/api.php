<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PurchaseController;
use App\Http\Controllers\Api\ServerController;
use App\Http\Controllers\Api\VerifyController;
use App\Http\Controllers\OptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('api.login');

    Route::post('/signup', [AuthController::class, 'signup'])->name('api.login');

    Route::post('/reset-password', [VerifyController::class, 'sendResetLink'])->name('api.reset.password');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');

    Route::post('/purchase', [PurchaseController::class, 'addPurchase'])->name('api.add.purchase');

    Route::post('/purchase/status', [PurchaseController::class, 'Status'])->name('api.purchase');
});

Route::post('/email/resend-verification', [VerifyController::class, 'resendVerify'])->name('api.verify.resend');

Route::get('/options', [OptionController::class, 'getOptions'])->name('api.options');