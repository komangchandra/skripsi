<?php

use App\Models\Kedelai;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\Artikel;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\KedelaiController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontArtikelController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Untuk Front Page
Route::get('/', function () {
    return view('home', [
        'kecamatans' => Kecamatan::all(),
        'kedelais' => Kedelai::all()
    ]);
});

Route::get('/artikel', [FrontArtikelController::class, 'index']);
Route::get('/artikel/{artikel:slug}', [FrontArtikelController::class, 'show']);

Route::get('/tentang-kami', function(){
    return view('tentang');
});
// UNtuk backend

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard Beranda
Route::get('/dashboard', function(){
    $jumlahArtikel = Artikel::count();
    $jumlahKecamatan = Kecamatan::count();
    $jumlahSesuai = Kedelai::where('warna', '#00FF1A')->count();
    return view('dashboard.dashboard', [
        'jumlahArtikel' => $jumlahArtikel,
        'jumlahKecamatan' => $jumlahKecamatan,
        'jumlahSesuai' => $jumlahSesuai,
        // 'kecamatans' => Kecamatan::all(),
        'kedelais' => Kedelai::all()
    ]);
})->middleware('auth');

// Dashboard Kategori
Route::resource('/dashboard/kategori', KategoriController::class)->middleware('auth');

// Dashboard Artikel
Route::resource('/dashboard/artikel', ArtikelController::class)->middleware('auth');

// Dashboard Kecamatan
Route::resource('/dashboard/kecamatan', KecamatanController::class)->middleware('auth');

// Dashboard Kesesuaian Lahan
Route::resource('/dashboard/kesesuaianlahan', KedelaiController::class)->middleware('auth');

// Dashboard Admin (user)
Route::get('/dashboard/admin', function() {
    return view('dashboard.admin', [
        "users" => User::latest()->paginate(5)
    ]);
})->middleware('auth');

