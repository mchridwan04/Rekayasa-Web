<?php

use App\Http\Controllers\beritacontroller;
use App\Http\Controllers\jurnalcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBeritaController;
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

Route::get('/', function () {
    return view('beranda',[
        "nama" => "Mochamad Ridwan",
        "nim" => "202053046",
        "title" => "Beranda",
    ]);
});

Route::get('/nim', function () {
    return view('nim',[
        "nama" => "Mochamad Ridwan",
        "nim" => "202053046",
        "title" => "NIM",
    ]);
});

Route::get('/beranda', function () {
    return view('beranda',[
        "nama" => "Mochamad Ridwan",
        "nim" => "202053046",
        "title" => "Beranda",
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "nama" => "Mochamad Ridwan",
        "nim" => "202053046",
        "title" => "Profil",
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "nama" => "Mochamad Ridwan",
        "nim" => "202053046",
        "title" => "Blog",
    ]);
});

Route::get('/berita', [beritacontroller::class, 'index']);
Route::get('/berita/{slug}', [beritacontroller::class, 'show']);

Route::get('/jurnal', [jurnalcontroller::class, 'index']);
Route::get('/jurnal/{slug}', [jurnalcontroller::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::resource('/dashboard/berita_tampil',
DashboardBeritaController::class);






