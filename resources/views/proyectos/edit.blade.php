<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Actualizar Proyecto ID: {{ $id }}</h1>
    <form action="#" method="POST">
        <div class="form-group">
            <label>Nuevo Nombre del Proyecto:</label>
            <input type="text" name="nombre" placeholder="Ingrese nuevo nombre">
        </div>
        <button type="submit">Actualizar Proyecto</button>
    </form>
    <br>
    <a href="{{ route('proyectos.index') }}">Volver al listado</a>
</body>
</html>
