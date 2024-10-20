<?php

use App\Models\Alumno;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('inicio');
});



Route::get('/home', function () {
    return view('home');
})->middleware("auth")->name('home');



Route::resource('alumnos', AlumnoController::class);


Route::get('/horarios', function () {
    return view('horarios');
})->middleware("auth")->name('horarios');



Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
