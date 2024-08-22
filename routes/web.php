<?php

use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminStatusController;
use App\Http\Controllers\AdminTiketMasukController;
use App\Http\Controllers\AdminTiketProsesController;
use App\Http\Controllers\AdminTiketTolakController;
use App\Http\Controllers\AjukanTiketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TiketProsesController;
use App\Http\Controllers\TiketSelesaiController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Models\status;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);
Route::get('/daftar', [UserController::class, 'index']);
Route::post('/daftar', [UserController::class, 'store'])->name('daftar');

Route::post('/login', [UserController::class, 'authenticate'])->name('login');

//Route user
Route::group(['middleware' => ['auth']], function () {
  // membuat route dashboard
  Route::get('/dashboard', [DashboardController::class, 'index']);

  // membuat route ajukan tiket
  Route::resource('dashboard/ajukan-tiket', AjukanTiketController::class);
  Route::resource('dashboard/tiket-status', StatusController::class);

  Route::get('dashboard/tiket-status/create/{tiket}', [StatusController::class,'create']);
Route::get('dashboard/tiket-status/selesai/{tiket}', [StatusController::class,'selesai']);
  Route::get('dashboard/tiket-proses/{id}/lanjutan', [StatusController::class,'lanjutan']);


  Route::get('dashboard/ajukan-tiket', [AjukanTiketController::class, 'index']);
  Route::post('dashboard/ajukan-tiket', [AjukanTiketController::class, 'store'])->name('tiket.simpan');
  // akhir membuat route ajukan tiket
  // membuat route tiket proses
  Route::resource('dashboard/tiket-proses', TiketProsesController::class);
  Route::get('dashboard/tiket-proses/{tiket}/lihat', [StatusController::class, 'view']);
  Route::resource('dashboard/tiket-proses/status', StatusController::class);
  // akhir membuat route tiket proses 
  // membuat route tiket proses 
  Route::resource('dashboard/tiket-selesai', TiketSelesaiController::class);

  // Route::get('dashboard/tiket-proses/selesai', function () {
  //   return view('Dashboard.Tiket-proses.selesai');
  // });
  // akhir membuat route tiket proses 
});


// route tiket masuk & tindak
// Route::get('dashboard-admin/tiket-masuk', function () {
//   return view('Dashboard-admin.Tiket-masuk.index');
// });

// Route::get('dashboard-admin/tiket-masuk/tindak', function () {
//   return view('Dashboard-admin.Tiket-masuk.Tindak.index');
// });

// khusun view fronend



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
  Route::get('/dashboard-admin/admin', [AdminAkunController::class, 'admin']);


  Route::resource('/dashboard-admin/tiket/masuk', AdminTiketMasukController::class);
  Route::resource('/dashboard-admin/tiket/ditolak', AdminTiketTolakController::class);
  Route::resource('/dashboard-admin/tiket/proses', AdminTiketProsesController::class);
  Route::resource('/dashboard-admin/tiket/status', AdminStatusController::class);
  Route::get('/dashboard-admin/tiket/status/create/{tiket}', [AdminStatusController::class,'create']);
  Route::post('dashboard-admin/tiket/masuk/{id}/tolak', [AdminTiketMasukController::class, 'tolak']);
  Route::get('dashboard-admin/tiket/selesai', [AdminTiketProsesController::class, 'selesai']);
  Route::get('dashboard-admin/tiket/selesai/{id}', [AdminTiketProsesController::class, 'cek_selesai']);
  Route::get('dashboard-admin/tiket-proses/tindak',);
});



// view edit tindak lanjut sementara
// Route::get('dashboard-admin/tiket-proses/edit', function () {
//   return view('Dashboard-admin.Tiket-proses.edit');
// });


// Route::get('dashboard/lanjutan/index', function () {
//   return view('Dashboard.lanjutan.index');
// });
// Route::get('dashboard/status/index', function () {
//   return view('Dashboard.status.index');
// });
