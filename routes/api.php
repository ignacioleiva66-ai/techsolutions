<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProyectoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD de proyectos vía API (Evaluación Unidad 3)
Route::apiResource('proyectos', ProyectoController::class);
