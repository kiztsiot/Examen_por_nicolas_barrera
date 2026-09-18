@extends('layouts.app')

@section('title', 'Nuevo cliente - VentasFix')

@section('content')
    <x-templates.card title="Nuevo cliente">
        <x-organisms.cliente-form />
    </x-templates.card>
@endsection
