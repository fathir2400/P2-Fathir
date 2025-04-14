<?php

use App\Http\Controllers\back\landingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BmsparepartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JamkerjaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\satuanController;
use App\Http\Controllers\ServisController;
use App\Http\Controllers\SettingControlle;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Spare_partController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Models\Barang;
use App\Models\User;
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
Route::middleware(['guest'])->group(function(){
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login']);
});
Route::get('/home',function(){
    return redirect('/admin');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[adminController::class,'index'])->middleware('userAkses:admin');
    Route::get('/supervisor',[adminController::class,'pengguna'])->middleware('userAkses:supervisor');
    Route::get('/petugas',[adminController::class,'petugas'])->middleware('userAkses:petugas');
    Route::get('/teknisi',[adminController::class,'pengguna'])->middleware('userAkses:teknisi');
    Route::get('/pengguna',[adminController::class,'pengguna'])->middleware('userAkses:pengguna');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});

Route::get('/',[landingpageController::class,'index']);
Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
//users
// Route::put('setting/{id}', 'SettingControlle@update')->name('setting.update');
Route::resource('/Users',UserController::class);
Route::get('/Users/invoice',[UserController::class,'show'])->name('Users.invoice');
Route::get('/siswa',[UserController::class,'siswa'])->name('siswa');
// Route::get('/siswa/{kode_kelas}',[UserController::class,'view'])->name('siswa.view');
// Route::get('/siswa/invoice',[MetodeController::class,'show'])->name('siswa.invoice');

Route::post('/store',[UserController::class,'store'])->name('Users.store');

Route::get('/setting', [SettingControlle::class, 'index'])->name('setting.index');
Route::post('/setting/{id_setting}', [SettingControlle::class, 'update'])->name('setting.update');


// Route::get('/', function () {
//     return view('frontend.master');
// });

// Route::get('landing', function () {
//     return view('landingpage.landingpage');
// });

// Route::get('/admin', function () {
//     return view('admin.template');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/user', function () {
//     return view('user');
// });
//