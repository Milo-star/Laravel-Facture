<?php

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

Route::get('/', [App\Http\Controllers\FactureController::class, 'index']);

Route::get('/factures/index', [App\Http\Controllers\FactureController::class, 'allClients']);

Route::get('/factures/edit/{id}', [App\Http\Controllers\FactureController::class, 'edit'])->name('factures.edit');

Route::put('/factures/{id}', [App\Http\Controllers\FactureController::class, 'update'])->name('factures.update');