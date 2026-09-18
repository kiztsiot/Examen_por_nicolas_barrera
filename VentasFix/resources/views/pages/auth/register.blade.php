@extends('layouts.app')

@section('title', 'Crear cuenta (pruebas) - VentasFix')

@section('content')
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-sm bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <h1 class="text-xl font-semibold text-gray-900 mb-1 text-center">VentasFix</h1>
            <p class="text-xs text-amber-600 text-center mb-6">Solo para pruebas — quitar antes de entregar</p>

            <form method="POST" action="{{ route('register.attempt') }}">
                @csrf

                <x-molecules.form label="Rut" name="rut" />
                <x-molecules.form label="Nombre" name="nombre" />
                <x-molecules.form label="Apellido" name="apellido" />
                <x-molecules.form label="Email (@ventasfix.cl)" name="email" type="email" />
                <x-molecules.form label="Contraseña" name="password" type="password" />

                <x-atoms.button type="submit" variant="primary">Crear cuenta</x-atoms.button>
            </form>

            <p class="text-sm text-gray-500 text-center mt-4">
                <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800">Volver a iniciar sesión</a>
            </p>
        </div>
    </div>
@endsection
