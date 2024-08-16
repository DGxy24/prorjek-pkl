<?php

use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTiketMasukController;
use App\Http\Controllers\AdminTiketProsesController;
use App\Http\Controllers\AdminTiketTolakController;
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
  Route::resource('dashboard/ajukan-tiket', AjukanTiketController::class);
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
// route tiket masuk & tindak
Route::get('dashboard-admin/tiket-masuk', function () {
  return view('Dashboard-admin.Tiket-masuk.index');
});

Route::get('dashboard-admin/tiket-masuk/tindak', function () {
  return view('Dashboard-admin.Tiket-masuk.Tindak.index');
});

// khusun view fronend
Route::get('dashboard/tiket-proses/selesai', function () {
  return view('Dashboard.Tiket-proses.selesai');
});


// End khusun view fronend

Route::get('/', [HomeController::class, 'index']);
Route::get('/daftar', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);


//rute logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Rute Admin
Route::group(['middleware' => [IsAdmin::class]], function () {
  Route::get('/dashboard-admin', [AdminController::class, 'index']);
  Route::resource('/dashboard-admin/user', AdminAkunController::class);


  Route::resource('/dashboard-admin/tiket/masuk', AdminTiketMasukController::class);
  Route::resource('/dashboard-admin/tiket/ditolak', AdminTiketTolakController::class);
  Route::resource('/dashboard-admin/tiket/proses', AdminTiketProsesController::class);
  Route::post('dashboard-admin/tiket/masuk/{id}/tolak', [AdminTiketMasukController::class, 'tolak']);

  Route::get('dashboard-admin/tiket-proses/tindak', );
});
