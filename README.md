# 🚀 Tech Solutions - Sistema de Gestión de Proyectos

[![PHP Version](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php&logoColor=white)](https://php.net)
[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel&logoColor=white)](https://laravel.com)

## 📖 Descripción del Proyecto
Este proyecto es una aplicación web desarrollada para **modernizar el sistema de gestión de proyectos** de la empresa **Tech Solutions**. Fue construido como parte de la **Evaluación Sumativa de la Unidad 1** de la asignatura *Desarrollo Software Web I* en el **Instituto Profesional San Sebastián**.

La aplicación permite gestionar proyectos de manera eficiente simulando un **CRUD completo** (Crear, Leer, Actualizar, Eliminar), siguiendo la estricta arquitectura **Modelo-Vista-Controlador (MVC)** y aplicando los principios de diseño del framework **Laravel**.

## 🎯 Funcionalidades Implementadas

| Módulo | Descripción |
| :--- | :--- |
| **📋 Listar Proyectos** | Visualización de todos los proyectos registrados en el sistema mediante datos simulados estáticos. |
| **➕ Agregar Proyecto** | Formulario HTML para registrar y procesar un nuevo proyecto con sus respectivos datos. |
| **🔍 Ver Proyecto** | Visualización del detalle de un proyecto específico, consultado por su parámetro ID. |
| **✏️ Actualizar Proyecto** | Interfaz para la edición y actualización de los datos de un proyecto existente. |
| **🗑️ Eliminar Proyecto** | Pantalla de confirmación para la eliminación segura de un proyecto del sistema. |
| **📊 Componente UF** | Componente reutilizable (Blade Component) que opera de forma autónoma y simula el consumo de una API externa para mostrar el valor de la Unidad de Fomento (UF) del día. |

## 🛠️ Tecnologías Utilizadas

- **Backend:** PHP, Laravel 11
- **Frontend:** Blade Templating Engine, HTML5, CSS3
- **Arquitectura:** Modelo-Vista-Controlador (MVC)
- **Control de Versiones:** Git & GitHub
- **Gestión de Dependencias:** Composer
- **Entorno Local:** Laragon / XAMPP

## 📁 Estructura del Proyecto (Principales directorios)

```text
techsolutions/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ProyectoController.php   # Controlador principal
│   ├── Models/
│   │       └── Proyecto.php             # Modelo de datos (Estático)
│   └── View/
│       └── Components/
│           └── ValorUf.php              # Lógica PHP del componente (UF)
├── resources/
│   └── views/
│       ├── proyectos/
│       │   ├── index.blade.php          # Lista principal de proyectos
│       │   ├── create.blade.php         # Formulario de creación
│       │   ├── show.blade.php           # Detalle individual de proyecto
│       │   ├── edit.blade.php           # Formulario de edición
│       │   └── destroy.blade.php        # Confirmación de eliminación
│       └── components/
│           └── valor-uf.blade.php       # Diseño visual del componente UF
└── routes/
    └── web.php                          # Definición de las 5 rutas WEB
```

## ⚙️ Instalación y Ejecución Local

Sigue estos pasos para levantar el entorno de desarrollo en tu máquina local:

1. **Clonar el repositorio**
   ```bash
   git clone [https://github.com/ignacioleiva66-ai/techsolutions.git](https://github.com/ignacioleiva66-ai/techsolutions.git)
   ```
2. **Acceder al directorio del proyecto**
   ```bash
   cd techsolutions
   ```
3. **Instalar las dependencias de PHP**
   ```bash
   composer install
   ```
4. **Configurar el archivo de entorno**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. **Iniciar el servidor de desarrollo**
   ```bash
   php artisan serve
   ```
6. **Acceder a la aplicación**
   Abre tu navegador web y dirígete a la ruta: `http://localhost:8000/proyectos`

---

## 👥 Equipo de Desarrollo
**IP San Sebastián - Desarrollo Software Web I**

* Susan Fernanda Arteaga Marín
* Mayco Michel Guzmán Velasquez
* Ignacio Nicolás Leiva Cordero
