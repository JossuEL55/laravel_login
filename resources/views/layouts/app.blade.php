<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticación - Laravel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4a90e2;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            flex: 1;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Aplicación</h1>
    </header>

    <main>
        @yield('content') <!-- Aquí se incluirá el contenido de las vistas -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación</p>
    </footer>
</body>
</html>
