<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');


Route::view('/Jugadores', 'jugadores')->name('jugadores');

Route::resource('/players', PlayerController::class);

Route::view('/Videos', 'videos')->name('videos');
Route::view('/Torneos', 'torneos')->name('torneos');
Route::view('/Noticias', 'noticias')->name('noticias');
