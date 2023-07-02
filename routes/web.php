<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiPohonController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\DonasiUangController;
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

Route::get('/', [DonationController::class, 'tim1']);

Route::get('/form', [LoginController::class, 'form'])->name('login');
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/form', [LoginController::class, 'authenticate']);
Route::get('/loginAdmin', [LoginAdminController::class, 'loginAdmin']);
Route::post('/loginAdmin', [LoginAdminController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [DonationController::class, 'home']);

Route::get('home/{post:slug}', [DonationController::class, 'show']);

Route::get('/donasi', [DonationController::class, 'donasi'])->middleware('auth');

Route::get('/donasiUang', [DonasiUangController::class, 'donasiUang'])->middleware('auth');
Route::post('/donasiUang', [DonasiUangController::class, 'donasiUangStore'])->middleware('auth');

Route::get('/donasiPohon', [DonasiPohonController::class, 'donasiPohon'])->middleware('auth');
Route::post('/donasiPohon', [DonasiPohonController::class, 'donasiPohonStore'])->middleware('auth');

Route::get('/account', [DonationController::class, 'account'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/newAdmin', [RegisterAdminController::class, 'newAdmin'])->middleware('auth');
Route::post('/newAdmin', [RegisterAdminController::class, 'store'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardController::class, 'checkSlug'])->middleware('auth');

