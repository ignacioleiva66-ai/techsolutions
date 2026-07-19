<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // 1. Obtener todos los proyectos
    public function index()
    {
        $proyectos = Proyecto::getProyectosEstaticos();
        return view('proyectos.index', compact('proyectos'));
    }

    // 2. Mostrar el formulario para crear un proyecto
    public function create()
    {
        return view('proyectos.create');
    }

    // 3. Guardar un nuevo proyecto
    public function store(Request $request)
    {
        return "Proyecto guardado correctamente";
    }

    // 4. Obtener un proyecto por su ID
    public function show($id)
    {
        $proyectos = collect(Proyecto::getProyectosEstaticos());
        $proyecto = $proyectos->firstWhere('Id', $id);

        return view('proyectos.show', compact('proyecto'));
    }

    // 5. Mostrar el formulario para actualizar un proyecto
    public function edit($id)
    {
        return view('proyectos.edit', compact('id'));
    }

    // 6. Actualizar un proyecto por su ID
    public function update(Request $request, $id)
    {
        return "Proyecto con ID: $id actualizado correctamente";
    }

    // 7. Mostrar la confirmación para eliminar un proyecto
    public function delete($id)
    {
        return view('proyectos.destroy', compact('id'));
    }

    // 8. Eliminar un proyecto por su ID
    public function destroy($id)
    {
        return "Proyecto con ID: $id eliminado correctamente.";
    }
}
