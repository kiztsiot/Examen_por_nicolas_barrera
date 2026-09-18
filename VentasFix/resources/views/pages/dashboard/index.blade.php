@extends('layouts.app')

@section('title', 'Dashboard - VentasFix')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-2xl font-semibold text-black mb-6">Inicio</h1>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <x-molecules.stat-card label="Usuarios" :value="$totalUsuarios" />
            <x-molecules.stat-card label="Productos" :value="$totalProductos" />
            <x-molecules.stat-card label="Clientes" :value="$totalClientes" />
        </div>
    </div>
@endsection
