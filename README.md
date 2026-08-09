
🚀 Tech Solutions - Sistema de Gestión de Proyecto

📖 Descripción del Proyecto

Este proyecto es una aplicación web desarrollada para modernizar el sistema de gestión de proyectos de la empresa Tech Solutions. Fue construido como parte de las Evaluaciones Sumativas de las Unidades 1 y 2 de la asignatura Desarrollo Software Web I en el Instituto Profesional San Sebastián.

La aplicación permite gestionar proyectos de manera eficiente mediante un CRUD (Crear, Leer, Actualizar, Eliminar), un sistema de autenticación de usuarios con contraseñas cifradas, siguiendo la arquitectura Modelo-Vista-Controlador (MVC) y aplicando los principios de diseño del framework Laravel.

🎯 Funcionalidades Implementadas
Unidad 1 — Gestión de Proyectos
Módulo	Descripción
📋 Listar Proyectos	Visualización de todos los proyectos registrados en el sistema.
➕ Agregar Proyecto	Formulario HTML para registrar y procesar un nuevo proyecto con sus respectivos datos.
🔍 Ver Proyecto	Visualización del detalle de un proyecto específico, consultado por su parámetro ID.
✏️ Actualizar Proyecto	Interfaz para la edición y actualización de los datos de un proyecto existente.
🗑️ Eliminar Proyecto	Pantalla de confirmación para la eliminación segura de un proyecto del sistema.
📊 Componente UF	Componente reutilizable (Blade Component) que simula el consumo de una API externa para mostrar el valor de la Unidad de Fomento (UF) del día.
Unidad 2 — Autenticación y Base de Datos
Módulo	Descripción
🗄️ Conexión a Base de Datos	Configuración de la aplicación mediante variables de entorno (.env) usando MySQL como motor de base de datos.
🧩 Modelos con ORM (Eloquent)	Modelos User y Proyecto mapeados a tablas reales de la base de datos mediante migraciones.
📝 Registro de Usuario	Formulario y controlador que crean un nuevo usuario, validando los datos ingresados.
🔑 Inicio de Sesión	Formulario y controlador que validan las credenciales del usuario contra la base de datos.
🔒 Cifrado de Contraseña	Las contraseñas se almacenan cifradas mediante Hash::make() (bcrypt), nunca en texto plano.
🚪 Cierre de Sesión	Ruta y método para finalizar la sesión activa del usuario.
🛠️ Tecnologías Utilizadas
Backend: PHP 8.2+, Laravel 10
Frontend: Blade Templating Engine, HTML5, CSS3, Bootstrap 5
Base de Datos: MySQL
Autenticación: Laravel Auth (Hash + Auth facade)
Arquitectura: Modelo-Vista-Controlador (MVC)
Control de Versiones: Git & GitHub
Gestión de Dependencias: Composer
Entorno Local: Laragon
📁 Estructura del Proyecto (Principales directorios)
techsolutions/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── ProyectoController.php   # Controlador de proyectos (CRUD)
│   │       └── AuthController.php       # Controlador de autenticación (login/registro)
│   ├── Models/
│   │   ├── Proyecto.php                 # Modelo Eloquent de proyectos
│   │   └── User.php                     # Modelo Eloquent de usuarios
│   └── View/
│       └── Components/
│           └── ValorUf.php              # Lógica PHP del componente (UF)
├── database/
│   └── migrations/
│       ├── 2014_10_12_000000_create_users_table.php
│       └── 2026_08_09_..._create_proyectos_table.php
├── resources/
│   └── views/
│       ├── proyectos/
│       │   ├── index.blade.php          # Lista principal de proyectos
│       │   ├── create.blade.php         # Formulario de creación
│       │   ├── show.blade.php           # Detalle individual de proyecto
│       │   ├── edit.blade.php           # Formulario de edición
│       │   └── destroy.blade.php        # Confirmación de eliminación
│       ├── auth/
│       │   ├── login.blade.php          # Formulario de inicio de sesión
│       │   └── register.blade.php       # Formulario de registro
│       └── components/
│           └── valor-uf.blade.php       # Diseño visual del componente UF
└── routes/
    └── web.php                          # Definición de las rutas de proyectos y autenticación
⚙️ Instalación y Ejecución Local

Sigue estos pasos para levantar el entorno de desarrollo en tu máquina local:

Clonar el repositorio
   git clone https://github.com/ignacioleiva66-ai/techsolutions.git
Acceder al directorio del proyecto
   cd techsolutions
Instalar las dependencias de PHP
   composer install
Configurar el archivo de entorno
   cp .env.example .env
   php artisan key:generate

Edita .env y ajusta las credenciales de tu base de datos local si es necesario (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

Crear la base de datos y ejecutar las migraciones
   php artisan migrate
Iniciar el servidor de desarrollo
   php artisan serve
Acceder a la aplicación Abre tu navegador y dirígete a:
Proyectos: http://localhost:8000/proyectos
Registro: http://localhost:8000/register
Inicio de sesión: http://localhost:8000/login
👥 Equipo de Desarrollo

IP San Sebastián — Desarrollo Software Web I

Susan Fernanda Arteaga Marín
Mayco Michel Guzmán Velasquez
Ignacio Nicolás Leiva Cordero
