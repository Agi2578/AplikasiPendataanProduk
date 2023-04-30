<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;



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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('barang', 'BarangController');
Route::resource('pembeli', 'PembeliController');
Route::resource('staff', 'StaffController');

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('barang.index', BarangController::class)->middleware('auth');
Route::resource('pembeli.index', PembeliController::class)->middleware('auth');
Route::resource('staff.index', StaffController::class)->middleware('auth');

