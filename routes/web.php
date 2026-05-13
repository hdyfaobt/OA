<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Public\PublicController::class, 'home'])->name('home');
Route::get('/team', [App\Http\Controllers\Public\PublicController::class, 'team'])->name('team');
Route::get('/calendar', [App\Http\Controllers\Public\PublicController::class, 'calendar'])->name('calendar');
Route::get('/contact', [App\Http\Controllers\Public\PublicController::class, 'contact'])->name('contact');
Route::get('/results', [App\Http\Controllers\Public\PublicController::class, 'results'])->name('results');
Route::get('/about', [App\Http\Controllers\Public\PublicController::class, 'about'])->name('about');
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/players', [App\Http\Controllers\Admin\PlayerController::class, 'index'])->name('admin.players.index');
    Route::get('/admin/players/{player}', [App\Http\Controllers\Admin\PlayerController::class, 'show'])->name('admin.players.show');
});

Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\Userzone\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
