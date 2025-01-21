<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LibroController;

Route::get('/', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::middleware('admin')->group(function() {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::resource('libro', LibroController::class, [
        'names' => [
            'index' => 'admin.libro.index',
            'create' => 'admin.libro.create',
            'store' => 'admin.libro.store',
            'edit' => 'admin.libro.edit',
            'update' => 'admin.libro.update',
            'destroy' => 'admin.libro.destroy',
        ]
        ]);
});
