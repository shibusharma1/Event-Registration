<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;

require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {

    // Admin Routes
    Route::middleware(['role:0'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('events', EventController::class)->except(['show']);
    });

    // User Events
    Route::middleware(['role:1'])->group(function () {
        Route::get('/', [EventController::class, 'userEvents'])->name('events.index');
    });

    Route::middleware(['throttle:5,1'])->group(function () {
        Route::post('/events/{event}/register', [RegistrationController::class, 'register'])->name('events.register');
        Route::delete('/events/{event}/cancel', [RegistrationController::class, 'cancel'])->name('events.cancel');
    });
});

// Fallback route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
