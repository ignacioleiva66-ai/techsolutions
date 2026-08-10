<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public static function getProyectosEstaticos()
    {
        // Simulamos una base de datos con un arreglo estático
        return [
             ['Id' => 1, 'Nombre' => 'Migración de Servidores', 'Fecha de Inicio' => '2026-07-20', 'Estado' => 'Activo', 'Responsable' => 'Ignacio', 'Monto' => 500000, 'created_by' => 1],
            ['Id' => 2, 'Nombre' => 'Desarrollo API', 'Fecha de Inicio' => '2026-08-01', 'Estado' => 'Pendiente', 'Responsable' => 'Monserrat', 'Monto' => 350000, 'created_by' => 2],
        ];
    }
}
