<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\PengajuanController;
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
    return view('home');
});

Route::get('about', function () {
    return 10*10;
});


//Route::get('/akun', function () {
//    $user = ['name', 'username', 'birthday', 'address', 'phone'];
//    return view('akun', ['user' => 'name' ,'username', 'birthday', 'address', 'phone']);
//});


Route::view('/mainlayout','mainlayout');
Route::view('/home','home');
Route::view('/iuran','iuran');
Route::view('/pengajuan','pengajuan');
//Route::view('/akun','akun');


// Route::view('/login','login');
// Route::view('/register','register');

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/iuran',[IuranController::class,'iuran']);
Route::get('/bayar',[BayarController::class,'bayar']);
Route::get('/bayar/create',[BayarController::class,'create']);
Route::post('/bayar/bayar/store',[BayarController::class,'store']);
Route::get('/bayar/bayar/store',[BayarController::class,'store']);
Route::post('/store',[BayarController::class,'store']);

//Route pengajuan
Route::get('/pengajuan/buat',[PengajuanController::class,'buat']);
Route::post('/pengajuan/simpan',[PengajuanController::class,'simpan']);
Route::get('/pengajuan/simpan',[PengajuanController::class,'simpan']);
Route::post('/pengajuan/pengajuan/simpan',[PengajuanController::class,'simpan']);
Route::post('/simpan',[PengajuanController::class,'simpan']);
Route::get('/statuspengajuan',[PengajuanController::class,'statuspengajuan']);
