@extends('layouts.app')

@section('title', 'Productos - VentasFix')

@section('content')
    <x-templates.card title="Productos">
        <x-slot:action>
            <a href="{{ route('productos.create') }}">
                <x-atoms.button type="button" variant="primary">+ Nuevo producto</x-atoms.button>
            </a>
        </x-slot:action>

        <x-organisms.producto-table :productos="$productos" />
    </x-templates.card>
@endsection
