@extends('layouts.app')

@section('title', 'Editar producto - VentasFix')

@section('content')
    <x-templates.card title="Editar producto">
        <x-organisms.producto-form :producto="$producto" />
    </x-templates.card>
@endsection
