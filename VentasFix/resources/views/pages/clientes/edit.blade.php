@extends('layouts.app')

@section('title', 'Editar cliente - VentasFix')

@section('content')
    <x-templates.card title="Editar cliente">
        <x-organisms.cliente-form :cliente="$cliente" />
    </x-templates.card>
@endsection
