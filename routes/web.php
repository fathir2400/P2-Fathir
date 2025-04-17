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
use App\Http\Controllers\OutletController;
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
    Route::get('/supervisor',[adminController::class,'supervisor'])->middleware('userAkses:supervisor');
    Route::get('/kasir',[adminController::class,'kasir'])->middleware('userAkses:kasir');
    Route::get('/weiters',[adminController::class,'weiters'])->middleware('userAkses:weiters');
    Route::get('/kitchent',[adminController::class,'kichent'])->middleware('userAkses:kichent');
    Route::get('/pelanggan',[adminController::class,'pelanggan'])->middleware('userAkses:pelanggan');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});

Route::get('/',[landingpageController::class,'index']);
Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
//users
// Route::put('setting/{id}', 'SettingControlle@update')->name('setting.update');
Route::resource('/Users',UserController::class);
Route::get('/Users/invoice',[UserController::class,'show'])->name('Users.invoice');
Route::get('/siswa',[UserController::class,'siswa'])->name('siswa');
Route::get('/admins',[UserController::class,'listAdmins'])->name('list_admin');
Route::get('/supervisors',[UserController::class,'listSupervisor'])->name('list_supervisor');
Route::get('/kasirs',[UserController::class,'listKasir'])->name('list_kasir');
Route::get('/kitchens',[UserController::class,'listKitchen'])->name('list_kitchen');
Route::get('/waiters',[UserController::class,'listWaiters'])->name('list_waiters');
Route::get('/pelanggans',[UserController::class,'listPelanggan'])->name('list_pelanggan');

//invoice
Route::get('/admin_invoice', [UserController::class, 'showAdmin'])->name('admin.invoice');
Route::get('/kasir_invoice', [UserController::class, 'showkasir'])->name('kasir.invoice');
Route::get('/kitchen_invoice', [UserController::class, 'showKitchen'])->name('kitchen.invoice');
Route::get('/waiters_invoice', [UserController::class, 'showWaiters'])->name('waiters.invoice');
Route::get('/supervisor_invoice', [UserController::class, 'showSupervisor'])->name('supervisor.invoice');
Route::get('/pelanggan_invoice', [UserController::class, 'showPelanggan'])->name('pelanggan.invoice');


// Route::get('/siswa/{kode_kelas}',[UserController::class,'view'])->name('siswa.view');
// Route::get('/siswa/invoice',[MetodeController::class,'show'])->name('siswa.invoice');

Route::post('/store',[UserController::class,'store'])->name('Users.store');

Route::get('/setting', [SettingControlle::class, 'index'])->name('setting.index');
Route::post('/setting/{id_setting}', [SettingControlle::class, 'update'])->name('setting.update');

Route::resource('/kategori',KategoriController::class);

Route::get('/kategori/invoice',[KategoriController::class,'show'])->name('kategori.invoice');

Route::resource('outlet', OutletController::class);



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
