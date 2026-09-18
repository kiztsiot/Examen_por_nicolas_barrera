<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VentasFix - Backoffice')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 min-h-screen">

    @auth
        <x-organisms.navbar />
    @endauth

    @if (session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
            <div class="bg-green-50 border border-green-200 text-green-800 text-sm rounded-xl px-4 py-3">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @yield('content')

</body>
</html>
