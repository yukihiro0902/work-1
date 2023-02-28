<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\BordController::class, 'index']);
Route::get('/create', [App\Http\Controllers\BordController::class, 'create'])->name('bord.create');
Route::post('/create', [App\Http\Controllers\BordController::class, 'insert'])->name('bord.insert');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

