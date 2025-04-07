<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Ruta para la página principal (por ejemplo, después del login)
Route::get('/home', function () {
    return view('home'); // Si tienes una vista home.blade.php
})->name('home');

// Ruta para mostrar el formulario de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Ruta para procesar el login
Route::post('/login', [AuthController::class, 'login']);

// Ruta para mostrar el formulario de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Ruta para procesar el registro
Route::post('/register', [AuthController::class, 'register']);

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');