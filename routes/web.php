<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

// 1. Listar todos los proyectos
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');

// 2. Agregar Proyecto
Route::get('/proyectos/crear', [ProyectoController::class, 'create'])->name('proyectos.create');

// 3. Obtener un proyecto por su id
Route::get('/proyectos/{id}', [ProyectoController::class, 'show'])->name('proyectos.show');

// 4. Actualizar proyecto por su id
Route::get('/proyectos/{id}/editar', [ProyectoController::class, 'edit'])->name('proyectos.edit');

// 5. Eliminar proyecto por su Id
Route::get('/proyectos/{id}/eliminar', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');
