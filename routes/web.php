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

// Factures
Route::get('/factures/index', [App\Http\Controllers\FactureController::class, 'allFactures'])-> name('factures.index');
Route::get('/factures/edit/{id}', [App\Http\Controllers\FactureController::class, 'edit'])->name('factures.edit');
Route::put('/factures/{id}', [App\Http\Controllers\FactureController::class, 'update'])->name('factures.update');
Route::delete('/factures/{id}', [App\Http\Controllers\FactureController::class, 'destroy'])->name('factures.destroy');
Route::get('/factures/create', [App\Http\Controllers\FactureController::class, 'create'])->name('factures.create');
Route::post('/factures/store', [App\Http\Controllers\FactureController::class, 'store'])->name('factures.store');

// Clients
Route::get('/clients/index', [App\Http\Controllers\ClientController::class, 'allClients'])-> name('clients.index');
Route::get('/clients/edit/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('clients.destroy');
Route::get('/clients/create', [App\Http\Controllers\ClientController::class, 'create'])->name('clients.create');
Route::post('/clients/store', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');