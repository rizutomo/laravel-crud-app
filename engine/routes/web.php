<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JenisPegawaiController;
use App\Http\Controllers\StatusPegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\JenisKelaminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/sepuh', function () {
    return view('sepuh');
});


//MIDDLEWARE
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);

    //CRUD AGAMA
    Route::get('/form', [TableController::class, 'create'])->name('agama.create');
    Route::get('/table', [TableController::class, 'index'])->name('agama.index');
    Route::post('/table', [TableController::class, 'store'])->name('agama.store');
    Route::get('/agama{id}', [TableController::class, 'edit'])->name('agama.edit');
    Route::put('/table/{id}', [TableController::class, 'update'])->name('agama.update');
    Route::delete('/table/{id}', [TableController::class, 'destroy'])->name('agama.destroy');

    //CRUD JENIS PEGAWAI
    Route::get('/form-jnspegawai', [JenisPegawaiController::class, 'create'])->name('jnspegawai.create');
    Route::get('/table-jnspegawai', [JenisPegawaiController::class, 'index'])->name('jnspegawai.index');
    Route::post('/table-jnspegawai', [JenisPegawaiController::class, 'store'])->name('jnspegawai.store');
    Route::get('/jnspegawai{id}', [JenisPegawaiController::class, 'edit'])->name('jnspegawai.edit');
    Route::put('/table-jnspegawai/{id}', [JenisPegawaiController::class, 'update'])->name('jnspegawai.update');
    Route::delete('/table-jnspegawai/{id}', [JenisPegawaiController::class, 'destroy'])->name('jnspegawai.destroy');

    //CRUD STATUS PEGAWAI
    Route::get('/form-stspegawai', [StatusPegawaiController::class, 'create'])->name('stspegawai.create');
    Route::get('/table-stspegawai', [StatusPegawaiController::class, 'index'])->name('stspegawai.index');
    Route::post('/table-stspegawai', [StatusPegawaiController::class, 'store'])->name('stspegawai.store');
    Route::get('/stspegawai{id}', [StatusPegawaiController::class, 'edit'])->name('stspegawai.edit');
    Route::put('/table-stspegawai/{id}', [StatusPegawaiController::class, 'update'])->name('stspegawai.update');
    Route::delete('/table-stspegawai/{id}', [StatusPegawaiController::class, 'destroy'])->name('stspegawai.destroy');

    //CRUD STATUS PENDIDIKAN
    Route::get('/form-pendidikan', [PendidikanController::class, 'create'])->name('pendidikan.create');
    Route::get('/table-pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
    Route::post('/table-pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
    Route::get('/pendidikan{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
    Route::put('/table-pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
    Route::delete('/table-pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

    //CRUD JENIS KELAMIN
    Route::get('/form-jnskelamin', [JenisKelaminController::class, 'create'])->name('jnskelamin.create');
    Route::get('/table-jnskelamin', [JenisKelaminController::class, 'index'])->name('jnskelamin.index');
    Route::post('/table-jnskelamin', [JenisKelaminController::class, 'store'])->name('jnskelamin.store');
    Route::get('/jnskelamin{id}', [JenisKelaminController::class, 'edit'])->name('jnskelamin.edit');
    Route::put('/table-jnskelamin/{id}', [JenisKelaminController::class, 'update'])->name('jnskelamin.update');
    Route::delete('/table-jnskelamin/{id}', [JenisKelaminController::class, 'destroy'])->name('jnskelamin.destroy');

    //CRUD PEGAWAI
    Route::get('/form-pegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::get('/table-pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::post('/table-pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/table-pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/table-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

});


//2023
Route::get('/page', [PageController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);



//AUTHENTICATION
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.authuser');
Route::get('/register', [AuthController::class, 'create'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


// Route::post('/prosesaddagama', [TableController::class, 'store']);

//COBA-COBA
Route::get('/hello-world', [HelloWorldController::class, 'showHelloWorld']);
Route::get('/book', [BookController::class, 'index']);