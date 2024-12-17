<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SectionImagesController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UploadController;
use App\Livewire\PortfolioEdit;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'verifyRole:admin']], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin-home');

    Route::get('/portfolio', [PortfolioController::class, 'All'])->name('all-portfolio');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('add-portfolio');
    Route::get('/portfolio/{portfolio:slug}', [PortfolioController::class, 'view'])->name('view-portfolio');

    Route::get('/portfolio/edit/{portfolio:slug}', PortfolioEdit::class)->name('edit-portfolio');

    Route::delete('/portfolio/delete/{portfolio:slug}', [PortfolioController::class, 'delete'])->name('delete-portfolio');

    Route::get('/inbox', [InboxController::class, 'inbox'])->name('inbox');
    Route::get('/inbox/read/{emailId}', [InboxController::class, 'view'])->name('read-email');
    Route::get('/compose/{sender?}/{email?}', [InboxController::class, 'compose'])->name('compose-email');
    Route::post('/compose/send', [InboxController::class, 'send'])->name('send-email');
    Route::post('/compose/reply/{email}', [InboxController::class, 'reply'])->name('reply-email');

    Route::get('/customers', [AdminController::class, 'AllUsers'])->name('all-users');
    Route::delete('/delete-user/{user}', [AdminController::class, 'deleteUser'])->name('delete-user');

    Route::get('/options', [OptionController::class, 'Options'])->name('all-options');
    Route::post('/options/save', [OptionController::class, 'saveOptions'])->name('save-options');

    Route::post('/options/web', [OptionController::class, 'saveWeb'])->name('save-web');
    Route::post('/options/socials', [OptionController::class, 'saveSocials'])->name('save-socials');

    Route::get('/section-images', [SectionImagesController::class, 'index'])->name('section-images');
    Route::post('/section-images/save', [SectionImagesController::class, 'save'])->name('save-section-images');
    Route::delete('/section-images/delete/{image}', [SectionImagesController::class, 'delete'])->name('delete-section-images');

    Route::get('/teams', [TeamController::class, 'index'])->name('all-teams');
    Route::post('/teams/save', [TeamController::class, 'save'])->name('save-team');
    Route::get('/teams/edit/{team}', [TeamController::class, 'edit'])->name('edit-team');
    Route::post('/teams/update/{team}', [TeamController::class, 'update'])->name('update-team');
    Route::delete('/teams/delete/{team}', [TeamController::class, 'delete'])->name('delete-team');

    Route::get('/categories', [CategoryController::class, 'index'])->name('all-categories');
    Route::post('/categories/save', [CategoryController::class, 'save'])->name('save-category');
    Route::delete('/categories/delete/{category}', [CategoryController::class, 'delete'])->name('delete-category');

    Route::get('/tags', [TagController::class, 'index'])->name('all-tags');
    Route::post('/tags/save', [TagController::class, 'store'])->name('save-tag');
    Route::delete('/tags/delete/{tag}', [TagController::class, 'delete'])->name('delete-tag');

    Route::get('/blogs', [PostController::class, 'index'])->name('all-blogs');
    Route::get('/blogs/create', [PostController::class, 'create'])->name('add-blog');
    Route::post('/blogs/{post}/status', [PostController::class, 'updateStatus'])->name('update-blog-status');
    Route::get('/blogs/{post}', [PostController::class, 'view'])->name('view-blog');
    Route::get('/blog/{post}/update', [PostController::class, 'edit'])->name('edit-blog');
    Route::delete('/blogs/{post}/delete', [PostController::class, 'destroy'])->name('delete-blog');

    Route::get('/adminUsers', [AdminController::class, 'allAdmins'])->name('all-admins');

    Route::get('/signup', [AdminController::class, 'addAdmin'])->name('add-admin');

    Route::get('/edit-admin/{user}', [AdminController::class, 'editAdmin'])->name('edit-admin');

    Route::delete('/delete-admin/{user}', [AdminController::class, 'deleteAdmin'])->name('delete-admin');

    Route::post('/upload/image', [UploadController::class, 'uploadImage'])->name('upload-image');
    Route::post('/upload/email/image', [UploadController::class, 'uploadEmail'])->name('upload-email-image');
});
