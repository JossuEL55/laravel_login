<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticación - Laravel</title>
</head>
<body>
    <header>
        <h1>Mi Aplicación</h1>
        <nav>
            <ul>
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Aquí se incluirá el contenido de las vistas -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación</p>
    </footer>
</body>
</html>