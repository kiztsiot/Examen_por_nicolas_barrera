@extends('layouts.app')

@section('title', 'Usuarios - VentasFix')

@section('content')
    <x-templates.card title="Usuarios">
        <x-slot:action>
            <a href="{{ route('usuarios.create') }}">
                <x-atoms.button type="button" variant="primary">+ Nuevo usuario</x-atoms.button>
            </a>
        </x-slot:action>

        <x-organisms.usuario-table :usuarios="$usuarios" />
    </x-templates.card>
@endsection
