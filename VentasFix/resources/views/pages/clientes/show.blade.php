@extends('layouts.app')

@section('title', 'Cliente - VentasFix')

@section('content')
    <x-templates.card title="{{ $cliente->razon_social }}">
        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
            <div>
                <dt class="text-gray-500">Rut empresa</dt>
                <dd class="text-gray-900">{{ $cliente->rut_empresa }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Rubro</dt>
                <dd class="text-gray-900">{{ $cliente->rubro }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Teléfono</dt>
                <dd class="text-gray-900">{{ $cliente->telefono }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Dirección</dt>
                <dd class="text-gray-900">{{ $cliente->direccion }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Contacto</dt>
                <dd class="text-gray-900">{{ $cliente->contacto_nombre }} ({{ $cliente->contacto_email }})</dd>
            </div>
        </dl>

        <div class="mt-6">
            <a href="{{ route('clientes.index') }}">
                <x-atoms.button type="button" variant="secondary">Volver</x-atoms.button>
            </a>
        </div>
    </x-templates.card>
@endsection
