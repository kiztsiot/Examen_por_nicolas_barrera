@props(['productos'])

<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr class="text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                <th class="px-4 py-3">SKU</th>
                <th class="px-4 py-3">Nombre</th>
                <th class="px-4 py-3">Precio venta</th>
                <th class="px-4 py-3">Stock</th>
                <th class="px-4 py-3 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($productos as $producto)
                <tr>
                    <td class="px-4 py-3 text-sm text-black-700">{{ $producto->sku }}</td>
                    <td class="px-4 py-3 text-sm text-black-900">{{ $producto->nombre }}</td>
                    <td class="px-4 py-3 text-sm text-black-700">${{ number_format($producto->precio_venta, 0, ',', '.') }}</td>
                    <td class="px-4 py-3 text-sm">
                        @if ($producto->stock_actual <= $producto->stock_bajo)
                            <x-atoms.badge variant="danger">{{ $producto->stock_actual }} - Stock bajo</x-atoms.badge>
                        @elseif ($producto->stock_actual >= $producto->stock_alto)
                            <x-atoms.badge variant="success">{{ $producto->stock_actual }} - Stock alto</x-atoms.badge>
                        @else
                            <x-atoms.badge variant="info">{{ $producto->stock_actual }} - Normal</x-atoms.badge>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-sm text-right space-x-2">
                        <a href="{{ route('productos.edit', $producto) }}" class="text-indigo-600 hover:text-indigo-800">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="inline"
                              onsubmit="return confirm('¿Eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-6 text-center text-sm text-gray-400">Sin productos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $productos->links() }}
</div>
