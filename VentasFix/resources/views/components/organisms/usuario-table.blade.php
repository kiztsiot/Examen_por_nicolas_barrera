@props(['usuarios'])

<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr class="text-left text-xs font-medium text-black uppercase tracking-wider">
                <th class="px-4 py-3">Rut</th>
                <th class="px-4 py-3">Nombre</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-black">
            @forelse ($usuarios as $usuario)
                <tr>
                    <td class="px-4 py-3 text-sm text-black-700">{{ $usuario->rut }}</td>
                    <td class="px-4 py-3 text-sm text-black-900">{{ $usuario->nombre }} {{ $usuario->apellido }}</td>
                    <td class="px-4 py-3 text-sm text-black-500">{{ $usuario->email }}</td>
                    <td class="px-4 py-3 text-sm text-right space-x-2">
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="text-blue-700 hover:text-indigo-800">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="inline"
                              onsubmit="return confirm('¿Eliminar este usuario?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-400">Sin usuarios registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $usuarios->links() }}
</div>
