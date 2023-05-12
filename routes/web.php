<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

// Route::resource('/supports', SupportController::class);

// Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
// Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
// Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
// Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
// Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
// Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
// Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

// Route::get('/contato', [SiteController::class, 'contato']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [Teste::class, 'teste']);

Route::get('/support', [SupportController::class, 'index'])->name('support.index');

Route::get('/support/create', [SupportController::class, 'creat'])->name('support.create');

Route::put('/support/{id}', [SupportController::class, 'update'])->name('support.update');

Route::get('/support/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::get('support/{id}', [SupportController::class, 'show'])->name('support.show');

Route::post('/support/create', [SupportController::class, 'store'])->name('support.store');


