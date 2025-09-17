<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/send', [HomeController::class, 'send'])->name('contact.send');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/services', [HomeController::class, 'service'])->name('services');

Route::get('/faqs', [HomeController::class, 'faq'])->name('faqs');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('reviews');


Route::get('/portfolios', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolios/{portfolio:slug}', [HomeController::class, 'viewPortfolio'])->name('show-portfolio');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{post:slug}', [HomeController::class, 'showBlog'])->name('show-blog');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

Route::get('/optimize', function () {
    Artisan::call('optimize:clear');
    // Artisan::call('migrate');
});

Route::get('/api-docs', function () {
    return view('auth.api-docs');
})->name('api-docs');

Route::get('/email/view', function () {
    $subject = 'Test Email';
    $content = 'This is a test email';
    return view('email.custom-message', compact('subject', 'content'));
});

Route::get('/email/test', [EmailController::class, 'test']);

Route::get('/test/email', function () {
    \Illuminate\Support\Facades\Mail::raw('This is a test email', function ($message) {
        $message->to('sameedhassan22@gmail.com')
            ->subject('Test Email');
    });

    return 'Test email sent';
});

Route::get('/vpndevelopment', function () { return view('home.vpndevelopment');})->name('vpndevelopment');
Route::get('/whitelabel', function () { return view('home.whitelabel');})->name('whitelabel');