@extends('layouts.app')

@section('title', 'Nuevo producto - VentasFix')

@section('content')
    <x-templates.card title="Nuevo producto">
        <x-organisms.producto-form />
    </x-templates.card>
@endsection
