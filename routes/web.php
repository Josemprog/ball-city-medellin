<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');
Route::view('/login', 'auth/login')->name('login');
Route::view('/registro', 'auth/registro')->name('registro');

Route::resource('/players', PlayerController::class);

Route::view('/Videos', 'videos')->name('videos');
Route::view('/Torneos', 'torneos')->name('torneos');
Route::view('/Noticias', 'noticias')->name('noticias');
