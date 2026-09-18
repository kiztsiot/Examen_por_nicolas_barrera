@extends('layouts.app')

@section('title', 'Editar usuario - VentasFix')

@section('content')
    <x-templates.card title="Editar usuario">
        <x-organisms.usuario-form :usuario="$usuario" />
    </x-templates.card>
@endsection
