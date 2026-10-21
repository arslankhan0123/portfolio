<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::prefix('/admin')->group(function () {
        Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('/delete/{id}', [ContactController::class, 'destroy'])->name('contacts.delete');
        Route::delete('/bulk-delete', [ContactController::class, 'bulkDelete'])->name('contacts.bulk-delete');
    });
});

require __DIR__.'/auth.php';
