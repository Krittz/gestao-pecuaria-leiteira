<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('animals', [AnimalController::class, 'store'])->name('animals.store');
