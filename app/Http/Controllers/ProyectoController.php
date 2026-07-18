<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // 1. Obtener todos los proyectos
    public function index() {
        $proyectos = Proyecto::getProyectosEstaticos();
        return view('proyectos.index', compact('proyectos'));
    }

    // 2. Obtener un proyecto por su id
    public function show($id) {
        $proyectos = collect(Proyecto::getProyectosEstaticos());
        $proyecto = $proyectos->firstWhere('Id', $id);
        return view('proyectos.show', compact('proyecto'));
    }

    // 3. Crear un proyecto
    public function create() {
        return view('proyectos.create');
    }

    // 4. Actualizar un proyecto por id
    public function edit($id) {
        return view('proyectos.edit', compact('id'));
    }

    // 5. Eliminar un proyecto por id
    public function destroy($id) {
        return view('proyectos.destroy', compact('id'));
    }
}
