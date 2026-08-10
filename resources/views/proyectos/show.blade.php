<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .card { border: 1px solid #ccc; padding: 20px; width: 400px; border-radius: 5px; background-color: #f9f9f9; }
    </style>
</head>
<body>
    <h1>Detalles del Proyecto</h1>
    @if($proyecto)
        <div class="card">
            <p><strong>ID:</strong> {{ $proyecto['Id'] }}</p>
            <p><strong>Nombre:</strong> {{ $proyecto['Nombre'] }}</p>
            <p><strong>Fecha de Inicio:</strong> {{ $proyecto['Fecha de Inicio'] }}</p>
            <p><strong>Estado:</strong> {{ $proyecto['Estado'] }}</p>
            <p><strong>Responsable:</strong> {{ $proyecto['Responsable'] }}</p>
            <p><strong>Monto:</strong> ${{ number_format($proyecto['Monto'], 0, ',', '.') }}</p>
            <p><strong>Creado por (usuario id):</strong> {{ $proyecto['created_by'] }}</p>
        </div>
    @else
        <p>Proyecto no encontrado.</p>
    @endif
    <br>
    <a href="{{ route('proyectos.index') }}">Volver al listado</a>
</body>
</html>
