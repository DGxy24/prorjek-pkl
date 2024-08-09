<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjukanTiketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiketProsesController;
use App\Http\Controllers\TiketSelesaiController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);
Route::get('/daftar', [UserController::class, 'index']);
Route::post('/daftar', [UserController::class, 'store'])->name('daftar');

Route::post('/login', [UserController::class, 'authenticate'])->name('login');
Route::group(['middleware' => ['auth']], function () {
  // membuat route dashboard
  Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
  // akhir membuat route dashboard
  // membuat route ajukan tiket
  Route::get('dashboard/ajukan-tiket', [AjukanTiketController::class, 'index']);
  Route::post('dashboard/ajukan-tiket', [AjukanTiketController::class, 'store'])->name('tiket.simpan');
  // akhir membuat route ajukan tiket
  // membuat route tiket proses
  Route::get('dashboard/tiket-proses', [TiketProsesController::class, 'index']);
  // akhir membuat route tiket proses 
  // membuat route tiket proses 
  Route::get('dashboard/tiket-selesai', [TiketSelesaiController::class, 'index']);
  // akhir membuat route tiket proses 
});



Route::get('/', [HomeController::class, 'index']);
Route::get('/daftar', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);


//rute logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('admin')->middleware(IsAdmin::class);
