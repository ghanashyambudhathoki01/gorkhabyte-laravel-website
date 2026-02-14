<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/training', [PageController::class, 'training'])->name('training');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'storeContact'])->name('contact.store');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])->name('blog.show');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

Route::get('/dashboard', function () {
    $stats = [
        'services' => \App\Models\Service::count(),
        'blogs' => \App\Models\Blog::count(),
        'trainings' => \App\Models\Training::count(),
        'messages' => \App\Models\Contact::count(),
    ];
    return view('dashboard', compact('stats'));
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TrainingController;
use App\Http\Controllers\Admin\ContactController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('blogs', BlogController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('trainings', TrainingController::class);
        Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
    });
});

require __DIR__.'/auth.php';
