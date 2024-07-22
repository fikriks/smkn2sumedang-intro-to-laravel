<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return to_route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('class-rooms', ClassRoomController::class);
    Route::resource('students', StudentController::class);
});
