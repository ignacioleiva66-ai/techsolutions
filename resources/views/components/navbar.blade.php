<nav style="padding: 15px; background-color: #f8f9fa; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="{{ route('home') }}" style="font-weight: bold; text-decoration: none; color: #333; margin-right: 15px;">
            Inicio
        </a>
        <a href="{{ url('/proyectos') }}" style="font-weight: bold; text-decoration: none; color: #333;">
            Proyectos
        </a>
    </div>
    <div>
        @auth
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; color: red; cursor: pointer;">Cerrar Sesión</button>
            </form>
        @else
            <a href="{{ route('login') }}" style="margin-right: 15px; text-decoration: none; color: #007bff;">Iniciar Sesión</a>
            <a href="{{ route('register') }}" style="text-decoration: none; color: #007bff;">Registrarse</a>
        @endauth
    </div>
</nav>
