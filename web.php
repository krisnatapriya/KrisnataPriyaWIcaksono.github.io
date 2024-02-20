<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//  127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    return view('welcome');
});

// //127.0.0.1:8000/Mahasiswa ==> <h1>Saya Mahasiswa</h1>
// Route::get('/mahasiswa', function () {
//     return "<h1>Saya Mahasiswa</h1>";
// });

// // 127.0.0.1:80000/Mahasiswa/1 ==> <h1>Saya Mahasiswa dengan Nim </h1>
// Route::get('/mahasiswa/{nim}', function ($nim) {
//     return "<h1>Saya Mahasiswa dengan nim $nim </h1>";
// })->where('nim','[E][0-9]+');

// Route::get('/mahasiswa/{nim}/{nama}', function ($nim, $nama) {
//     return "<h1>Saya Mahasiswa dengan nim $nim & nama $nama </h1>";
// })->where(['nim'=>'[E][0-9]+','nama'=>'[A-Za-z]+']);

Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/{nim}/{nama}', [MahasiswaController::class, 'detail'])->where(['nim'=>'[E][0-9]+','nama'=>'[A-Za-z]+']);
