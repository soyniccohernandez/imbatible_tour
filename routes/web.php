<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    $slides = [
        ['src' => asset('storage/1.webp'), 'alt' => 'Banner 1'],
        ['src' => asset('storage/2.webp'), 'alt' => 'Banner 2'],
        ['src' => asset('storage/3.webp'), 'alt' => 'Banner 2'],
        ['src' => asset('storage/4.webp'), 'alt' => 'Banner 2']
    ];

    return view('welcome', compact('slides'));
});

Route::view('/politica-de-privacidad', 'politica')->name('politica');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
