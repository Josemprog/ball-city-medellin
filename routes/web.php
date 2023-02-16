<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');

// LOGIN Y REGISTRO
Route::view('/login', 'auth/login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::view('/registro', 'auth/registro')->name('registro');
Route::post('/registro', [RegisteredUserController::class, 'store']);

// JUGADORES
Route::resource('/players', PlayerController::class);

Route::view('/Videos', 'videos')->name('videos');
Route::view('/Torneos', 'torneos')->name('torneos');
Route::view('/Noticias', 'noticias')->name('noticias');
Route::view('/Tienda', 'tienda')->name('tienda')->middleware('auth');
