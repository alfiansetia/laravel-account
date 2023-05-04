<?php

use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransaksiController;
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
Route::get('report', [ReportController::class, 'index'])->name('report.index');
Route::post('report', [ReportController::class, 'getData'])->name('report.getData');

Route::resource('poin', PoinController::class)->only('index');
Route::resource('nasabah', NasabahController::class)->only('index', 'create', 'store');
Route::resource('transaksi', TransaksiController::class)->only('index', 'create', 'store');

Route::get('/', function () {
    return view('welcome');
});
