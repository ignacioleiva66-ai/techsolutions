<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .alert { padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; margin-bottom: 20px; border-radius: 5px;}
        button { padding: 10px 15px; background-color: #dc3545; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Eliminar Proyecto</h1>
    <div class="alert">
        <p>¿Estás seguro de que deseas eliminar permanentemente el proyecto con ID: <strong>{{ $id }}</strong>?</p>
    </div>
    <form action="{{ route('proyectos.delete', $id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Sí, eliminar proyecto</button>
    </form>
    <br>
    <a href="{{ route('proyectos.index') }}">Cancelar y volver al listado</a>
</body>
</html>
