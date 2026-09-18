@extends('layouts.app')

@section('title', 'Clientes - VentasFix')

@section('content')
    <x-templates.card title="Clientes">
        <x-slot:action>
            <a href="{{ route('clientes.create') }}">
                <x-atoms.button type="button" variant="primary">+ Nuevo cliente</x-atoms.button>
            </a>
        </x-slot:action>

        <x-organisms.cliente-table :clientes="$clientes" />
    </x-templates.card>
@endsection
