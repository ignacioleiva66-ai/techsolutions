<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

<h1>Actualizar Proyecto ID: {{ $id }}</h1>

<form action="{{ route('proyectos.update', $id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nombre del Proyecto:</label>
        <input type="text" name="nombre" placeholder="Ingrese nuevo nombre">
    </div>

    <div class="form-group">
        <label>Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio">
    </div>

    <div class="form-group">
        <label>Estado:</label>
        <select name="estado">
            <option value="Activo">Activo</option>
            <option value="Pendiente">Pendiente</option>
        </select>
    </div>

    <div class="form-group">
        <label>Responsable:</label>
        <input type="text" name="responsable">
    </div>

    <div class="form-group">
        <label>Monto:</label>
        <input type="number" name="monto">
    </div>

    <button type="submit">Actualizar Proyecto</button>

</form>

<br>

<a href="{{ route('proyectos.index') }}">Volver al listado</a>

</body>
</html>
