@extends('layouts.app')

@section('title', 'Ingresar - VentasFix')

@section('content')
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-sm bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="VentasFix" class="h-12 w-auto">
            </div>

            <form method="POST" action="{{ route('login.attempt') }}">
                @csrf

                <x-molecules.form label="Email" name="email" type="email" />
                <x-molecules.form label="Contraseña" name="password" type="password" />

                <label class="flex items-center gap-2 text-sm text-gray-600 mb-6">
                    <input type="checkbox" name="recordar" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    Recordarme
                </label>

                <x-atoms.button type="submit" variant="primary">Ingresar</x-atoms.button>
            </form>

            <p class="text-sm text-gray-500 text-center mt-4">
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800">Crear cuenta</a>
            </p>
        </div>
    </div>
@endsection
