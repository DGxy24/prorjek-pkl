<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ HomeController::class, 'index']);
Route::get('/daftar', [ UserController::class, 'index']);
Route::post('/daftar', [ UserController::class, 'store'])->name('daftar');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.auth');

Route::get('/', [HomeController::class, 'index']);
Route::get('/daftar', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);

