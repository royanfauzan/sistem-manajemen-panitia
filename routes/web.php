<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserKegiatanController;
use App\Models\Kegiatan;
use App\Models\User;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'ceklogin']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/registrasi', [RegisterController::class,'index'])->middleware('guest');
Route::post('/registrasi',[RegisterController::class,'store']);

Route::get('/dashboard',function () {
    return view('dashboard',[
        'kegiatans' => Kegiatan::where('user_id',auth()->user()->id)->get()
    ]);
})->middleware('auth');

Route::get('/tester',function () {
    return view('layouts.main');
});

Route::get('/listkegiatan',function () {
    return view('kegiatans.listkegiatan',[
        'kegiatans' => Kegiatan::all()
    ]);
});

Route::resource('/kegiatans', UserKegiatanController::class);
