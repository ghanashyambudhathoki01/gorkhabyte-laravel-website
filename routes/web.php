<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/check-my-account', function() {
    if (!auth()->check()) {
        return '<h1>Not logged in</h1>';
    }
    
    $user = auth()->user();
    return view('check-account', compact('user'));
})->middleware('auth');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/training', [PageController::class, 'training'])->name('training');
Route::get('/training/{slug}', [PageController::class, 'trainingShow'])->name('training.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'storeContact'])->name('contact.store');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])->name('blog.show');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::redirect('/dashboard', '/admin-dashboard');

Route::get('/admin-dashboard', function () {
    if (auth()->user()->isAdmin()) {
        $stats = [
            'services' => \App\Models\Service::count(),
            'blogs' => \App\Models\Blog::count(),
            'trainings' => \App\Models\Training::count(),
            'messages' => \App\Models\Contact::count(),
            'videos' => \App\Models\Video::count(),
            'feedback' => \App\Models\Feedback::count(),
        ];
        return view('dashboard', compact('stats'));
    }

    if (auth()->user()->isStudent()) {
        return redirect()->route('student.dashboard');
    }

    return redirect('/')->with('error', 'Unauthorized access.');
})->middleware(['auth'])->name('dashboard');

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TrainingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
        Route::resource('blogs', BlogController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('trainings', TrainingController::class);
        Route::resource('videos', VideoController::class);
        Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
        Route::get('feedback', [AdminFeedbackController::class, 'index'])->name('feedback.index');
        Route::get('feedback/{id}', [AdminFeedbackController::class, 'show'])->name('feedback.show');
        Route::delete('feedback/{id}', [AdminFeedbackController::class, 'destroy'])->name('feedback.destroy');
    });

    Route::prefix('student')->name('student.')->middleware('student')->group(function () {
        Route::get('/student-dashboard', \App\Http\Controllers\Student\DashboardController::class)->name('dashboard');
        Route::get('/videos', [\App\Http\Controllers\Student\VideoController::class, 'index'])->name('videos.index');
        Route::get('/videos/{id}', [\App\Http\Controllers\Student\VideoController::class, 'show'])->name('videos.show');
        Route::get('/feedback', [\App\Http\Controllers\Student\FeedbackController::class, 'create'])->name('feedback.create');
        Route::post('/feedback', [\App\Http\Controllers\Student\FeedbackController::class, 'store'])->name('feedback.store');
    });
});

Route::prefix('student')->name('student.')->middleware('guest')->group(function () {
    Route::get('/register', [App\Http\Controllers\Student\Auth\RegisterController::class, 'create'])->name('register');
    Route::post('/register', [App\Http\Controllers\Student\Auth\RegisterController::class, 'store'])->name('register.store');
});

require __DIR__.'/auth.php';
