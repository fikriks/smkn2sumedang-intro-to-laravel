<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClassRoomController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('class-rooms', ClassRoomController::class);
