<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterdataController;
use App\Http\Controllers\LogoController;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

//Manjemen User
Route::get('/manajemen-user', [UserController::class, 'manajemenuser'])->name('manajemenuser');
Route::get('/manajemen-role', [UserController::class, 'manajemenrole'])->name('manajemenrole');

//Perjalanan Dinas
Route::get('/request-perjalanan-dinas', [MasterdataController::class, 'requestperdi'])->name('perjalanandinas.request');
Route::get('/approval-perjalanan-dinas', [MasterdataController::class, 'approvalperdi'])->name('perjalanandinas.approval');
Route::get('/validasi-perjalanan-dinas', [MasterdataController::class, 'validasiperdi'])->name('perjalanandinas.validasi');

//Reimbursement
Route::get('/request-reimbursement', [MasterdataController::class, 'requestreim'])->name('reimbursement.request');
Route::get('/approval-reimbursement', [MasterdataController::class, 'approvalreim'])->name('reimbursement.approval');
Route::get('/validasi-reimbursement', [MasterdataController::class, 'validasireim'])->name('reimbursement.validasi');

//Manajemen Logo
Route::get('/manajemen-logo', [LogoController::class, 'manajemenlogo'])->name('logo.manajemenlogo');