@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Correo electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div>
                <button type="submit">Iniciar sesión</button>
            </div>

            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p>No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
        </form>
    </div>
@endsection
