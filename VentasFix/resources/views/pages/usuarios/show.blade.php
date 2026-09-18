@extends('layouts.app')

@section('title', 'Usuario - VentasFix')

@section('content')
    <x-templates.card title="{{ $usuario->nombre }} {{ $usuario->apellido }}">
        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
            <div>
                <dt class="text-gray-500">Rut</dt>
                <dd class="text-gray-900">{{ $usuario->rut }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Email</dt>
                <dd class="text-gray-900">{{ $usuario->email }}</dd>
            </div>
        </dl>

        <div class="mt-6">
            <a href="{{ route('usuarios.index') }}">
                <x-atoms.button type="button" variant="secondary">Volver</x-atoms.button>
            </a>
        </div>
    </x-templates.card>
@endsection
