<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FaqController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Redirigir al home después de iniciar sesión
Route::get('/home', function () {
    return view('home');
})->middleware('auth', 'verified')->name('home');

// Ruta de inicio de sesión protegida por middleware de invitado
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/foro', function () {
    return view('foro');
})->name('foro');

Route::get('/recursos', function () {
    return view('recursos');
})->name('recursos');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)->middleware('auth');
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');

require __DIR__.'/auth.php';
