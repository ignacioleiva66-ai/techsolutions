[README.md](https://github.com/user-attachments/files/31865356/README.md)
# 🚀 Tech Solutions - Sistema de Gestión de Proyectos

**PHP 8.2+** · **Laravel 10**

## 📖 Descripción del Proyecto

Este proyecto es una aplicación web desarrollada para modernizar el sistema de gestión de proyectos de la empresa **Tech Solutions**. Fue construido como parte de las Evaluaciones Sumativas de las Unidades 1, 2 y 3 de la asignatura **Desarrollo Software Web I** en el Instituto Profesional San Sebastián.

La aplicación permite gestionar proyectos de manera eficiente mediante un CRUD web (Crear, Leer, Actualizar, Eliminar), un sistema de **autenticación de usuarios** con contraseñas cifradas, una interfaz de navegación unificada tipo sitio corporativo, y una **API REST** para interactuar con los proyectos de forma programática, siguiendo la arquitectura Modelo-Vista-Controlador (MVC) y aplicando los principios de diseño del framework Laravel.

## 🎯 Funcionalidades Implementadas

### Unidad 1 — Gestión de Proyectos

- 📋 **Listar Proyectos** — Visualización de todos los proyectos registrados en el sistema.
- ➕ **Agregar Proyecto** — Formulario HTML para registrar y procesar un nuevo proyecto con sus respectivos datos.
- 🔍 **Ver Proyecto** — Visualización del detalle de un proyecto específico, consultado por su parámetro ID.
- ✏️ **Actualizar Proyecto** — Interfaz para la edición y actualización de los datos de un proyecto existente.
- 🗑️ **Eliminar Proyecto** — Pantalla de confirmación para la eliminación segura de un proyecto del sistema.
- 📊 **Componente UF** — Componente reutilizable (Blade Component) que simula el consumo de una API externa para mostrar el valor de la Unidad de Fomento (UF) del día.

### Unidad 2 — Autenticación, Base de Datos e Interfaz

- 🗄️ **Conexión a Base de Datos** — Configuración de la aplicación mediante variables de entorno (`.env`) usando MySQL como motor de base de datos.
- 🧩 **Modelos con ORM (Eloquent)** — Modelos `User` y `Proyecto` mapeados a tablas reales de la base de datos mediante migraciones, incluyendo la relación `Proyecto → User` a través de `created_by`.
- 📝 **Registro de Usuario** — Formulario y controlador que crean un nuevo usuario, validando los datos ingresados (nombre, correo único, contraseña con confirmación).
- 🔑 **Inicio de Sesión** — Formulario y controlador que validan las credenciales del usuario contra la base de datos mediante `Auth::attempt()`.
- 🔒 **Cifrado de Contraseña** — Las contraseñas se almacenan cifradas mediante `Hash::make()` (bcrypt), nunca en texto plano.
- 🚪 **Cierre de Sesión** — Ruta y método para finalizar la sesión activa del usuario.
- 🏠 **Página de Inicio** — Portada corporativa con información sobre Tech Solutions (quiénes somos, qué ofrecemos, misión).
- 🧭 **Navegación Unificada** — Layout compartido (`layouts/app.blade.php`) con barra de navegación que se adapta según el estado de sesión del usuario (Inicio, Proyectos, Iniciar sesión/Registrarse, o nombre de usuario y Cerrar sesión).

### Unidad 3 — API REST de Proyectos

- 🔌 **CRUD vía API** — Endpoints REST bajo `/api/proyectos` para crear, listar, consultar, actualizar y eliminar proyectos directamente sobre la base de datos, usando `Route::apiResource`.
- 📦 **Respuesta estandarizada (DTO)** — Todas las respuestas (excepto la eliminación) se devuelven mediante `ApiResponseDTO`, con la forma `{ code, message, data }`.
- ✅ **Validación de datos** — Todos los campos son requeridos y se validan con las reglas nativas de Laravel antes de insertar o actualizar un proyecto.
- 🔢 **Códigos de respuesta HTTP correctos** — `201` al crear, `200` al listar/consultar/actualizar, `404` si el proyecto no existe, y `204` sin cuerpo al eliminar.

**Endpoints disponibles:**

- `GET /api/proyectos` — Lista todos los proyectos (200).
- `POST /api/proyectos` — Crea un nuevo proyecto (201).
- `GET /api/proyectos/{id}` — Consulta un proyecto por su ID (200, o 404 si no existe).
- `PUT /api/proyectos/{id}` — Actualiza un proyecto por su ID (200, o 404 si no existe).
- `DELETE /api/proyectos/{id}` — Elimina un proyecto por su ID (204, o 404 si no existe).

## 🛠️ Tecnologías Utilizadas

- **Backend:** PHP 8.2+, Laravel 10
- **Frontend:** Blade Templating Engine, HTML5, CSS3, Bootstrap 5, Bootstrap Icons
- **Base de Datos:** MySQL
- **Autenticación:** Laravel Auth (Hash + Auth facade), Laravel Sanctum
- **API:** Rutas RESTful (`Route::apiResource`) con respuestas JSON estandarizadas
- **Arquitectura:** Modelo-Vista-Controlador (MVC) + DTO para respuestas de API
- **Control de Versiones:** Git & GitHub
- **Gestión de Dependencias:** Composer
- **Entorno Local:** Laragon

## 📁 Estructura del Proyecto (Principales directorios)

```
techsolutions/
├── app/
│   ├── DTOs/
│   │   └── ApiResponseDTO.php           # Estructura estándar de respuesta de la API
│   ├── Http/
│   │   └── Controllers/
│   │       ├── ProyectoController.php   # Controlador web de proyectos (CRUD con vistas)
│   │       ├── AuthController.php       # Controlador de autenticación (login/registro)
│   │       └── Api/
│   │           └── ProyectoController.php  # Controlador API de proyectos (CRUD REST)
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
│       ├── layouts/
│       │   └── app.blade.php            # Layout compartido: navbar + portada + footer
│       ├── welcome.blade.php            # Página de inicio (información de la empresa)
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
│           ├── navbar.blade.php         # Barra de navegación
│           └── valor-uf.blade.php       # Diseño visual del componente UF
└── routes/
    ├── web.php                          # Rutas de inicio, proyectos y autenticación
    └── api.php                          # Rutas REST de proyectos (/api/proyectos)
```

## ⚙️ Instalación y Ejecución Local

Sigue estos pasos para levantar el entorno de desarrollo en tu máquina local:

**1. Clonar el repositorio**
```
git clone https://github.com/ignacioleiva66-ai/techsolutions.git
```

**2. Acceder al directorio del proyecto**
```
cd techsolutions
```

**3. Instalar las dependencias de PHP**
```
composer install
```

**4. Configurar el archivo de entorno**
```
cp .env.example .env
php artisan key:generate
```
Edita `.env` y ajusta las credenciales de tu base de datos local si es necesario (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

**5. Crear la base de datos y ejecutar las migraciones**
```
php artisan migrate
```

**6. Iniciar el servidor de desarrollo**
```
php artisan serve
```

**7. Acceder a la aplicación**

Abre tu navegador y dirígete a:
- Inicio: `http://localhost:8000/`
- Proyectos: `http://localhost:8000/proyectos`
- Registro: `http://localhost:8000/register`
- Inicio de sesión: `http://localhost:8000/login`

**8. Probar la API**

Con el servidor corriendo, puedes probar los endpoints con `curl` o Postman, por ejemplo:
```
curl http://localhost:8000/api/proyectos
```

## 👥 Equipo de Desarrollo

**IP San Sebastián — Desarrollo Software Web I**

- Susan Fernanda Arteaga Marín
- Mayco Michel Guzmán Velasquez
- Ignacio Nicolás Leiva Cordero
