<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Citas Médicas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-blue-600 p-4 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">🏥 Citas Médicas</h1>
            <div class="space-x-4">
                <a href="/doctors-view" class="hover:underline font-semibold">Doctores</a>
                <a href="/appointments-view" class="hover:underline font-semibold">Citas</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>
</body>
</html>