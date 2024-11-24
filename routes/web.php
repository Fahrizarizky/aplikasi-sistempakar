<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\diagnosaController;
use App\Http\Controllers\loginController;
use App\Models\Gejala;
use App\Models\Tingkatstres;
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

Route::get('/', [loginController::class, 'index']);
Route::get('/register', [loginController::class, 'register']);
Route::post('/registerstore', [loginController::class, 'registerstore']);
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/loginstore', [loginController::class, 'loginstore']);
Route::get('/logout', [loginController::class, 'logout']);
Route::get('/account/{id}', [loginController::class, 'account']);
Route::post('/updateaccount/{id}', [loginController::class, 'updateaccount']);

Route::get('/konsultasi', [diagnosaController::class, 'konsultasi'])->middleware('auth');
Route::post('/hasildiagnosa', [diagnosaController::class, 'hasildiagnosa']);

Route::get('/dashboard', [dashboardController::class, 'dashboardindex'])->middleware('adminroute','auth');
Route::get('/daftarkonsultasi/{id}/info', [dashboardController::class, 'daftarkonsultasiinfo'])->middleware('adminroute','auth');
Route::delete('/hapusdaftarkonsultasi/{id}', [dashboardController::class, 'hapusdaftarkonsultasi'])->middleware('adminroute','auth');
Route::get('/dashboard/daftarakun', [dashboardController::class, 'daftarakun']);
Route::get('/editdaftarakun/{id}', [dashboardController::class, 'editdaftarakun']);
Route::post('/updatedaftarakun/{id}', [dashboardController::class, 'updatedaftarakun']);


Route::get('/dashboard/gejalapage', [dashboardController::class, 'gejalapage'])->middleware('adminroute','auth');
Route::get('/dashboard/tambahgejala', [dashboardController::class, 'tambahgejala'])->middleware('adminroute','auth');
Route::post('/storegejala', [dashboardController::class, 'storegejala'])->middleware('adminroute','auth');
Route::get('/editgejala/{id}', [dashboardController::class, 'editgejala'])->middleware('adminroute','auth');
Route::post('/updategejala/{id}', [dashboardController::class, 'updategejala'])->middleware('adminroute','auth');
Route::delete('/deletegejala/{id}', [dashboardController::class, 'deletegejala'])->middleware('adminroute','auth');

Route::get('/dashboard/tingkatstrespage', [dashboardController::class, 'tingkatstrespage'])->middleware('adminroute','auth');
Route::get('/dashboard/tambahtingkatstres', [dashboardController::class, 'tambahtingkatstres'])->middleware('adminroute','auth');
Route::post('/storetingkatstres', [dashboardController::class, 'storetingkatstres'])->middleware('adminroute','auth');
Route::get('/edittingkatstres/{id}', [dashboardController::class, 'edittingkatstres'])->middleware('adminroute','auth');
Route::post('/updatetingkatstres/{id}', [dashboardController::class, 'updatetingkatstres'])->middleware('adminroute','auth');
Route::delete('/hapustingkatstres/{id}', [dashboardController::class, 'hapustingkatstres'])->middleware('adminroute','auth');

Route::get('/dashboard/aturanpage', [dashboardController::class, 'aturanpage'])->middleware('adminroute','auth');
Route::get('/dashboard/tambahaturan', [dashboardController::class, 'tambahaturan'])->middleware('adminroute','auth');
Route::post('/storeaturan', [dashboardController::class, 'storeaturan'])->middleware('adminroute','auth');
Route::get('/editaturan/{id}', [dashboardController::class, 'editaturan'])->middleware('adminroute','auth');
Route::post('/updateaturan/{id}', [dashboardController::class, 'updateaturan'])->middleware('adminroute','auth');
Route::delete('/hapusaturan/{id}', [dashboardController::class, 'hapusaturan'])->middleware('adminroute','auth');

Route::delete('/deletedaftarakun/{id}', [dashboardController::class, 'deletedaftarakun'])->middleware('adminroute','auth');