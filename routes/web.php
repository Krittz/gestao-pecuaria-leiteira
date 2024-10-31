<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

// Rotas de Autenticação (públicas)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.attempt');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Página inicial (home)
    Route::get('/', function () {
        return view('app');
    })->name('home');

    // Rotas para gerenciamento de animais
    Route::get('animals', [AnimalController::class, 'index'])->name('animals.index');
    Route::get('animals/create', [AnimalController::class, 'create'])->name('animals.create');
    Route::post('animals', [AnimalController::class, 'store'])->name('animals.store');
    Route::delete('animals/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');
});
