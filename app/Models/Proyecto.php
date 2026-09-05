<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'estado',
        'responsable',
        'monto',
        'created_by',
    ];

    // Relación: un proyecto pertenece a un usuario (quien lo creó)
    public function usuario()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Se mantiene solo por compatibilidad con las vistas Blade de la Unidad 1
    public static function getProyectosEstaticos()
    {
        return [
            ['Id' => 1, 'Nombre' => 'Migración de Servidores', 'Fecha de Inicio' => '2026-07-20', 'Estado' => 'Activo', 'Responsable' => 'Ignacio', 'Monto' => 500000, 'created_by' => 1],
            ['Id' => 2, 'Nombre' => 'Desarrollo API', 'Fecha de Inicio' => '2026-08-01', 'Estado' => 'Pendiente', 'Responsable' => 'Monserrat', 'Monto' => 350000, 'created_by' => 2],
        ];
    }
}
