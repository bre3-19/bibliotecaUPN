<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LibroController;
use App\Http\Controllers\Admin\ClasificacionController;

Route::get('/', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::middleware('admin')->group(function() {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('admin/libro/create', [LibroController::class, 'create'])->name('admin.libro.create');
    Route::get('admin/libro/edit', [LibroController::class, 'edit'])->name('admin.libro.show');
    Route::post('admin/libro/edit', [LibroController::class, 'update'])->name('admin.libro.update');

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

    Route::get('admin/libro/{id}', [LibroController::class, 'show'])->name('admin.libro.details');

    Route::resource('clasificacion', ClasificacionController::class, [
        'names' => [
            'index' => 'admin.clasificacion.index',
            'create' => 'admin.clasificacion.create',
            'store' => 'admin.clasificacion.store',
            'edit' => 'admin.clasificacion.edit',
            'update' => 'admin.clasificacion.update',
            'destroy' => 'admin.clasificacion.destroy',
        ]
    ]);
});
