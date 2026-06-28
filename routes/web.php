<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Pharmacist\PharmacistController;
use App\Http\Controllers\Cashier\CashierController;


Route::get('/', fn() => redirect()->route('login'));


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });


Route::middleware(['auth', 'role:pharmacist'])
    ->prefix('pharmacist')
    ->name('pharmacist.')
    ->group(function () {
        Route::get('/dashboard', [PharmacistController::class, 'dashboard'])->name('dashboard');
    });


Route::middleware(['auth', 'role:cashier'])
    ->prefix('cashier')
    ->name('cashier.')
    ->group(function () {
        Route::get('/dashboard', [CashierController::class, 'dashboard'])->name('dashboard');
    });