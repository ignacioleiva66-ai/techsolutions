<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

// 1. Listar todos los proyectos
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');

// 2. Mostrar el formulario para agregar un proyecto
Route::get('/proyectos/crear', [ProyectoController::class, 'create'])->name('proyectos.create');

// 3. Guardar un proyecto
Route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');

// 4. Obtener un proyecto por su ID
Route::get('/proyectos/{id}', [ProyectoController::class, 'show'])->name('proyectos.show');

// 5. Mostrar el formulario para actualizar un proyecto por su ID
Route::get('/proyectos/{id}/editar', [ProyectoController::class, 'edit'])->name('proyectos.edit');

// 6. Actualizar un proyecto por su ID
Route::put('/proyectos/{id}', [ProyectoController::class, 'update'])->name('proyectos.update');

// 7. Mostrar la confirmación para eliminar un proyecto
Route::get('/proyectos/{id}/eliminar', [ProyectoController::class, 'delete'])->name('proyectos.destroy');

// 8. Eliminar un proyecto por su ID
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy'])->name('proyectos.delete');
