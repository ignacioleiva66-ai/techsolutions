<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Agregar Nuevo Proyecto</h1>
    {{-- Envía el formulario a la ruta que ejecuta el método store() --}}
    <form action="{{ route('proyectos.store') }}" method="POST">

        {{-- Token de seguridad requerido por Laravel para formularios POST --}}
        @csrf

        <div class="form-group">
            <label>Nombre del Proyecto:</label>
            <input type="text" name="nombre" required>
        </div>
        <div class="form-group">
            <label>Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio" required>
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
            <input type="text" name="responsable" required>
        </div>
        <div class="form-group">
            <label>Monto:</label>
            <input type="number" name="monto" required>
        </div>
        <button type="submit">Guardar Proyecto</button>
    </form>
    <br>
    <a href="{{ route('proyectos.index') }}">Volver al listado</a>
</body>
</html>
