<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\CobaChartController;
use App\Http\Controllers\DataVolunteerController;
use App\Http\Controllers\DaftarVolunteerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UbahProfileController;
use App\Http\Controllers\defController;
use App\Http\Controllers\RegisterVolunteerController;
use App\Http\Controllers\FavoritController;

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
Route::get('/informasi', function () {
    return view('main.informasi');
});
Route::get('/InputDataPangan', function () {
    return view('main.InputDataPangan');
});
Route::get('/favorit', function () {
    return view('main.favorit');
});
Route::get('/PasarTerdekat', function () {
    return view('main.PasarTerdekat');
});

Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('admin')->group(function () {
    Route::get('/approval', [ApprovalController::class, 'index']);
    Route::get('/DataVolunteer', [DataVolunteerController::class, 'index']);
    Route::get('/hargaPangan', [CobaChartController::class, 'linechart']);
    Route::post('/terima', [ApprovalController::class, 'terima']);
    Route::post('/tolak', [ApprovalController::class, 'tolak']);
    Route::post('/active', [ApprovalController::class, 'active']);
    Route::post('/inactive', [ApprovalController::class, 'inactive']);
});

Route::middleware('user')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/DaftarVolunteer', [DaftarVolunteerController::class, 'index']);
    Route::post('/DaftarVolunteer', [DaftarVolunteerController::class, 'store']);
    Route::get('/UbahProfile', [UbahProfileController::class, 'index']);
    Route::get('/Profile', [ProfileController::class, 'index']);
    Route::resource('/DaftarVolunteer', RegisterVolunteerController::class);
});

Route::post('/InputDataPangan', [InputDataPanganController::class, 'store']);
