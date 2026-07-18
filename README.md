# Sistema de Gestión de Proyectos - Tech Solutions

Este proyecto es una aplicación web desarrollada para modernizar el sistema de gestión de proyectos de la empresa Tech Solutions, construida con el framework Laravel.

## Requerimientos Cumplidos

El sistema implementa las siguientes funcionalidades bajo la arquitectura Modelo-Vista-Controlador (MVC):

*   **Listado de Proyectos:** Visualización de todos los proyectos registrados.
*   **Gestión (CRUD):** Capacidad para agregar, visualizar detalle, actualizar y eliminar proyectos mediante identificadores (ID).
*   **Modelo de Datos:** Implementación de un modelo `Proyecto` con datos estáticos (Id, Nombre, Fecha de Inicio, Estado, Responsable, Monto).
*   **Componente Reutilizable (UF):** Inclusión de un componente de UI independiente que simula el consumo de una API externa para mostrar el valor de la Unidad de Fomento (UF) del día.

## Tecnologías Utilizadas

*   PHP / Laravel 11
*   Blade Templating Engine
*   HTML5 / CSS3

## Instalación y Ejecución Local

1. Clonar el repositorio: `git clone https://github.com/ignacioleiva66-ai/techsolutions.git`
2. Navegar al directorio: `cd techsolutions`
3. Instalar dependencias: `composer install`
4. Iniciar el servidor local: `php artisan serve`
5. Acceder a la aplicación: `http://localhost:8000/proyectos`
