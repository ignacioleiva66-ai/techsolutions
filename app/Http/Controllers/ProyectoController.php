<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyectoController extends Controller
{
    // 1. Obtener todos los proyectos
    public function index(Request $request)
    {
        $proyectos = Proyecto::all();

        // Si la petición espera JSON, retorna el arreglo y el código 200[cite: 1]
        if ($request->wantsJson()) {
            return response()->json($proyectos, 200);
        }

        // Si es una petición normal del navegador, carga la vista con código 200[cite: 1, 7]
        return response()->view('proyectos.index', compact('proyectos'), 200);
    }

    // 2. Mostrar el formulario para crear un proyecto
    public function create()
    {
        return view('proyectos.create');
    }

    // 3. Guardar un nuevo proyecto
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre'       => 'required|string',
            'fecha_inicio' => 'required|date',
            'estado'       => 'required|string',
            'responsable'  => 'required|string',
            'monto'        => 'required|numeric'
        ]);

        $validatedData['created_by'] = Auth::id() ?? 1;

        $proyecto = Proyecto::create($validatedData);

        // Si la petición espera JSON, retorna el código 201 exacto[cite: 1]
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Proyecto creado',
                'data' => $proyecto
            ], 201);
        }

        // Si es un formulario web, redirige al listado para mostrar la vista
        return redirect()->route('proyectos.index');
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
