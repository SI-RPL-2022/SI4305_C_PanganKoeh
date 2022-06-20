<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\CobaChartController;
use App\Http\Controllers\DataVolunteerController;
use App\Http\Controllers\DaftarVolunteerController;
use App\Http\Controllers\DetailPasarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UbahProfileController;
use App\Http\Controllers\defController;
use App\Http\Controllers\RegisterVolunteerController;
use App\Http\Controllers\PasarTerdekatController;
use App\Http\Controllers\InputPanganController;
use App\Http\Controllers\PilihPasarController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\InformasiController;

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

Route::get('/', [defController::class, 'index'])->name('pertama');

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/hargaPangan', function () {
//     return view('main.Dashboard');
// });


Route::get('/InputArtikel', function () {
    return view('main.InputArtikel');
});
Route::get('/PerbandinganHarga', function () {
    return view('main.PerbandinganHarga');
});
Route::get('/MasterDataPasar', function () {
    return view('main.MasterDataPasar');
});
Route::get('/MasterDataKomoditas', function () {
    return view('main.MasterDataKomoditas');
});
// Route::get('/favorit', function () {
//     return view('main.favorit');
// });

Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('admin')->group(function () {
    Route::get('/approval', [ApprovalController::class, 'index']);
    Route::get('/DataVolunteer', [DataVolunteerController::class, 'index']);
    // Route::get('/hargaPangan1', [CobaController::class, 'linechart']);
    Route::post('/terima', [ApprovalController::class, 'terima']);
    Route::post('/tolak', [ApprovalController::class, 'tolak']);
    Route::post('/active', [ApprovalController::class, 'active']);
    Route::post('/inactive', [ApprovalController::class, 'inactive']);

    Route::get('/Informasi', [InformasiController::class, 'index']);
    Route::get('/Informasi/create', [InformasiController::class, 'create']);
    Route::post('/Informasi/store', [InformasiController::class, 'store']);
    Route::get('/Informasi/edit/{informasi:id}', [InformasiController::class, 'edit']);
    Route::post('/Informasi/update/{informasi:id}', [InformasiController::class, 'update']);
    Route::get('/Informasi/{informasi:slug}', [InformasiController::class, 'show']);
    Route::get('/Informasi/cekSlug/{judul}', [InformasiController::class, 'cekSlug']);
    Route::post('/Informasi/delete/{id}', [InformasiController::class, 'destroy']);
});

Route::middleware('user')->group(function () {
    Route::get('/PasarTerdekat', [PasarTerdekatController::class, 'index']);
    Route::post('/PasarTerdekat', [PasarTerdekatController::class, 'find']);
    Route::post('/Favourite', [defController::class, 'favourite']);
    Route::get('/favorit', [FavouriteController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/DaftarVolunteer', [DaftarVolunteerController::class, 'index']);
    Route::post('/DaftarVolunteer', [DaftarVolunteerController::class, 'store']);
    Route::get('/UbahProfile', [UbahProfileController::class, 'index']);
    Route::get('/Profile', [ProfileController::class, 'index']);
    Route::resource('/DaftarVolunteer', RegisterVolunteerController::class);
    Route::resource('/InputDataPangan', InputPanganController::class);
    Route::resource('/PilihPasar', PilihPasarController::class);
    Route::get('/Informasi', [InformasiController::class, 'index']);
    Route::get('/Informasi/{informasi:slug}', [InformasiController::class, 'show']);
    // Route::get('/PerbandinganHarga', [InformasiController::class, 'index']);
});
Route::get('/hargaPangan/{id}', [CobaChartController::class, 'barchart']);
Route::get('/hargaPangan1/{id_pangan}/{id_pasar}', [CobaChartController::class, 'linechart']);
Route::get('/DetailPasar/{id}', [DetailPasarController::class, 'index']);

// Route::post('/InputDataPangan', [InputDataPanganController::class, 'store']);
