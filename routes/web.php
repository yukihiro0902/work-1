<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\BordController::class, 'index']);
Route::get('/create', [App\Http\Controllers\BordController::class, 'create'])->name('bord.create');
Route::post('/create', [App\Http\Controllers\BordController::class, 'insert'])->name('bord.insert');
Route::get('/edit/{id}', [App\Http\Controllers\BordController::class, 'edit'])->name('bord.edit');
Route::put('/update', [App\Http\Controllers\BordController::class, 'update'])->name('bord.update');
Route::get('/delete/{id}', [App\Http\Controllers\BordController::class, 'delete'])->name('bord.delete');
Route::get('/keyword', [App\Http\Controllers\BordController::class, 'keyword'])->name('bord.keyword');
Route::get('/comment', [App\Http\Controllers\BordController::class, 'comment'])->name('bord.comment');
Route::post('/comment', [App\Http\Controllers\BordController::class, 'comment_ins'])->name('bord.comment_ins');
Route::get('/writein/{id}', [App\Http\Controllers\BordController::class, 'writein'])->name('bord.writein');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\BordController::class, 'dashbord'])->name('dashboard');
});

