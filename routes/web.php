<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\indexController;
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

Route::get('/', [indexController::class, 'index']);

Route::post('/send-email', [indexController::class, 'sendEmail']);

Route::get('/success', [indexController::class, 'success']);

Route::get('/update-info', [DashboardController::class, 'updateInfo']);

Route::get('/update-bio', [DashboardController::class, 'updateBio']);
Route::post('/simpan-update-bio', [DashboardController::class, 'simpanupdateBio']);

Route::get('/update-deskripsi', [DashboardController::class, 'updateDeskripsi']);
Route::post('/simpan-update-desk', [DashboardController::class, 'simpanupdateDeskripsi']);

Route::get('/update-more', [DashboardController::class, 'updateMore']);
Route::post('/simpan-update-more', [DashboardController::class, 'simpanupdateMore']);