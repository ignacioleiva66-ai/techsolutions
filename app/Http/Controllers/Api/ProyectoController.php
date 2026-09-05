<?php

namespace App\Http\Controllers\Api;

use App\DTOs\ApiResponseDTO;
use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // 1. GET /api/proyectos -> Listar todos los proyectos
    public function index()
    {
        $proyectos = Proyecto::all();

        $response = new ApiResponseDTO(
            200,
            'Proyectos obtenidos correctamente',
            $proyectos
        );

        return response()->json(
            $response->toArray(),
            200
        );
    }

    // 2. POST /api/proyectos -> Crear un nuevo proyecto
    public function store(Request $request)
    {
        $validado = $request->validate([
            'nombre'        => 'required|string|max:255',
            'fecha_inicio'  => 'required|date',
            'estado'        => 'required|string|max:255',
            'responsable'   => 'required|string|max:255',
            'monto'         => 'required|numeric',
            'created_by'    => 'required|exists:users,id',
        ]);

        $proyecto = Proyecto::create($validado);

        $response = new ApiResponseDTO(
            201,
            'Proyecto creado correctamente',
            $proyecto
        );

        return response()->json(
            $response->toArray(),
            201
        );
    }

    // 3. GET /api/proyectos/{id} -> Mostrar un proyecto por su ID
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            $response = new ApiResponseDTO(
                404,
                'Proyecto no encontrado',
                null
            );

            return response()->json(
                $response->toArray(),
                404
            );
        }

        $response = new ApiResponseDTO(
            200,
            'Proyecto obtenido correctamente',
            $proyecto
        );

        return response()->json(
            $response->toArray(),
            200
        );
    }

    // 4. PUT/PATCH /api/proyectos/{id} -> Actualizar un proyecto por su ID
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            $response = new ApiResponseDTO(
                404,
                'Proyecto no encontrado',
                null
            );

            return response()->json(
                $response->toArray(),
                404
            );
        }

        $validado = $request->validate([
            'nombre'        => 'required|string|max:255',
            'fecha_inicio'  => 'required|date',
            'estado'        => 'required|string|max:255',
            'responsable'   => 'required|string|max:255',
            'monto'         => 'required|numeric',
            'created_by'    => 'required|exists:users,id',
        ]);

        $proyecto->update($validado);

        $response = new ApiResponseDTO(
            200,
            'Proyecto actualizado correctamente',
            $proyecto
        );

        return response()->json(
            $response->toArray(),
            200
        );
    }

    // 5. DELETE /api/proyectos/{id} -> Eliminar un proyecto por su ID
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            $response = new ApiResponseDTO(
                404,
                'Proyecto no encontrado',
                null
            );

            return response()->json(
                $response->toArray(),
                404
            );
        }

        $proyecto->delete();

        // La rúbrica exige 204 con cuerpo vacío, por eso NO se usa el DTO aquí
        return response()->noContent();
    }
}
