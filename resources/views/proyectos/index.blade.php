<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Listado de Proyectos Tech Solutions</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de Inicio</th>
            <th>Estado</th>
            <th>Responsable</th>
            <th>Monto</th>
            <th>Acciones</th>
        </tr>
        @foreach($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto['Id'] }}</td>
            <td>{{ $proyecto['Nombre'] }}</td>
            <td>{{ $proyecto['Fecha de Inicio'] }}</td>
            <td>{{ $proyecto['Estado'] }}</td>
            <td>{{ $proyecto['Responsable'] }}</td>
            <td>${{ number_format($proyecto['Monto'], 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('proyectos.show', $proyecto['Id']) }}">Ver</a> |
                <a href="{{ route('proyectos.edit', $proyecto['Id']) }}">Editar</a> |
                <a href="{{ route('proyectos.destroy', $proyecto['Id']) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ route('proyectos.create') }}">Crear Nuevo Proyecto</a>
</body>
</html>
