<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Middleware Role
Route::get('/news', 'NewsController@index');
Route::get('/songs', 'SongController@index');

Route::middleware(['auth', 'role:user, writer, admin'])->group(function () {
    Route::post('/songs/{song}/review', 'ReviewController@store');
});

Route::middleware(['auth', 'role:writer, admin'])->group(function () {
    Route::get('/writer/dashboard', 'WriterController@index');
    Route::post('/news/create', 'NewsController@store');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index');
    Route::post('/reviews/{review}/approve', 'ReviewController@approve');
    Route::post('/news/{news}/approve', 'NewsController@approve');
});

