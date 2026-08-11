@extends('layouts.app')

@section('title', 'Iniciar sesión - Tech Solutions')
@section('hero-title', 'Bienvenido de nuevo')
@section('hero-subtitle', 'Ingresa con tu cuenta para gestionar tus proyectos')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm border-0 mb-5">
            <div class="card-body p-4">
                <h4 class="mb-4"><i class="bi bi-box-arrow-in-right text-primary"></i> Iniciar sesión</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Clave</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>

                <p class="mt-3 text-center mb-0">
                    ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
