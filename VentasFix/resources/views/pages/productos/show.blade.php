@extends('layouts.app')

@section('title', 'Producto - VentasFix')

@section('content')
    <x-templates.card title="{{ $producto->nombre }}">
        @if ($producto->imagen)
            <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}" class="h-32 w-32 object-cover rounded-xl border border-gray-200 mb-4">
        @endif

        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
            <div>
                <dt class="text-gray-500">SKU</dt>
                <dd class="text-gray-900">{{ $producto->sku }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Precio neto</dt>
                <dd class="text-gray-900">${{ number_format($producto->precio_neto, 0, ',', '.') }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Precio venta (con IVA)</dt>
                <dd class="text-gray-900">${{ number_format($producto->precio_venta, 0, ',', '.') }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Stock actual</dt>
                <dd class="text-gray-900">{{ $producto->stock_actual }}</dd>
            </div>
            <div class="sm:col-span-2">
                <dt class="text-gray-500">Descripción</dt>
                <dd class="text-gray-900">{{ $producto->descripcion_larga }}</dd>
            </div>
        </dl>

        <div class="mt-6">
            <a href="{{ route('productos.index') }}">
                <x-atoms.button type="button" variant="secondary">Volver</x-atoms.button>
            </a>
        </div>
    </x-templates.card>
@endsection
