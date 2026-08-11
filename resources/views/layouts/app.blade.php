<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tech Solutions')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f5f7fa; }
        .navbar-brand { font-weight: 700; letter-spacing: .5px; }
        .navbar-brand .bi { color: #0d6efd; }
        .hero-banner {
            background: linear-gradient(135deg, #0d1b2a 0%, #0d6efd 100%);
            color: #fff;
            padding: 3rem 0 2.5rem 0;
            margin-bottom: 2rem;
        }
        .hero-banner h1 { font-weight: 700; }
        .hero-banner p { opacity: .85; }
        footer { color: #6c757d; font-size: .875rem; padding: 2rem 0; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-diagram-3-fill"></i> Tech Solutions
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}" href="{{ route('home') }}">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('proyectos.*') ? 'active fw-semibold' : '' }}" href="{{ route('proyectos.index') }}">
                            <i class="bi bi-kanban"></i> Proyectos
                        </a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item">
                            <span class="nav-link text-white-50">
                                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                            </span>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-light btn-sm ms-2">
                                    <i class="bi bi-box-arrow-right"></i> Cerrar sesión
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('login') ? 'active fw-semibold' : '' }}" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary btn-sm ms-2" href="{{ route('register') }}">
                                <i class="bi bi-person-plus"></i> Crear cuenta
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-banner">
        <div class="container">
            <h1>@yield('hero-title', 'Tech Solutions')</h1>
            <p class="mb-0">@yield('hero-subtitle', 'Sistema de Gestión de Proyectos')</p>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer class="container text-center mt-5">
        &copy; {{ date('Y') }} Tech Solutions — Desarrollo Software Web I, IP San Sebastián
    </footer>

</body>
</html>
