<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
use App\Http\Controllers\sessionController;


Route::get('/', function () {
    return view('home');
});
Route::get('login', [sessionController::class, 'create'])->name('login.index');
Route::get('register', [registroController::class, 'create'])->name('register.index');
