@props(['clientes'])

<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr class="text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                <th class="px-4 py-3">Rut empresa</th>
                <th class="px-4 py-3">Razón social</th>
                <th class="px-4 py-3">Rubro</th>
                <th class="px-4 py-3">Contacto</th>
                <th class="px-4 py-3 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($clientes as $cliente)
                <tr>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $cliente->rut_empresa }}</td>
                    <td class="px-4 py-3 text-sm text-gray-900">{{ $cliente->razon_social }}</td>
                    <td class="px-4 py-3 text-sm text-gray-500">{{ $cliente->rubro }}</td>
                    <td class="px-4 py-3 text-sm text-gray-500">{{ $cliente->contacto_nombre }}</td>
                    <td class="px-4 py-3 text-sm text-right space-x-2">
                        <a href="{{ route('clientes.edit', $cliente) }}" class="text-indigo-600 hover:text-indigo-800">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="inline"
                              onsubmit="return confirm('¿Eliminar este cliente?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-6 text-center text-sm text-gray-400">Sin clientes registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $clientes->links() }}
</div>
