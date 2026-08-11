@extends('layouts.app')

@section('title', 'Tech Solutions - Inicio')
@section('hero-title', 'Tech Solutions')
@section('hero-subtitle', 'Software a medida para modernizar la gestión de proyectos de tu empresa')

@section('content')

<div class="row align-items-center mb-5">
    <div class="col-lg-7">
        <h2 class="mb-3">¿Quiénes somos?</h2>
        <p class="lead text-muted">
            Tech Solutions es una empresa dedicada al desarrollo de software de gestión para
            otras empresas. Nos especializamos en construir plataformas web a medida que
            permiten a nuestros clientes planificar, dar seguimiento y controlar sus proyectos
            de forma centralizada, segura y accesible desde cualquier lugar.
        </p>
        <p class="text-muted">
            Nacimos con el objetivo de modernizar procesos que muchas empresas todavía manejan
            en planillas o sistemas desactualizados, reemplazándolos por herramientas modernas
            construidas sobre frameworks robustos como Laravel, con foco en la seguridad de los
            datos y la experiencia de usuario.
        </p>
        <a href="{{ route('proyectos.index') }}" class="btn btn-primary btn-lg mt-2">
            <i class="bi bi-kanban"></i> Ver proyectos
        </a>
        @guest
            <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg mt-2">
                <i class="bi bi-person-plus"></i> Crear cuenta
            </a>
        @endguest
    </div>
    <div class="col-lg-5 text-center">
        <i class="bi bi-buildings" style="font-size: 10rem; color: #0d6efd;"></i>
    </div>
</div>

<hr class="my-5">

<div class="row text-center mb-5">
    <div class="col-12 mb-4">
        <h2>Qué ofrecemos</h2>
        <p class="text-muted">Los pilares de nuestra plataforma de gestión de proyectos</p>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
                <i class="bi bi-kanban-fill text-primary mb-3" style="font-size: 2.5rem;"></i>
                <h5>Gestión de Proyectos</h5>
                <p class="text-muted mb-0">
                    Crea, edita, consulta y elimina proyectos con toda la información
                    relevante: responsable, fechas, estado y presupuesto.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
                <i class="bi bi-shield-lock-fill text-primary mb-3" style="font-size: 2.5rem;"></i>
                <h5>Acceso Seguro</h5>
                <p class="text-muted mb-0">
                    Cada usuario cuenta con su propia cuenta protegida mediante
                    autenticación y cifrado de contraseñas.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
                <i class="bi bi-graph-up-arrow text-primary mb-3" style="font-size: 2.5rem;"></i>
                <h5>Información al día</h5>
                <p class="text-muted mb-0">
                    Visualiza el estado de cada proyecto y datos de referencia,
                    como el valor de la UF, en tiempo real dentro del sistema.
                </p>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<div class="row justify-content-center text-center mb-5">
    <div class="col-lg-8">
        <h2>Nuestra misión</h2>
        <p class="text-muted">
            Ayudar a las empresas a dejar atrás las planillas y los procesos manuales,
            entregando herramientas digitales simples, seguras y hechas a la medida de
            cada equipo de trabajo.
        </p>
    </div>
</div>

@endsection
