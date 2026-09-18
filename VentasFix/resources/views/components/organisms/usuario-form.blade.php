@props(['usuario' => null])

<form method="POST" action="{{ $usuario ? route('usuarios.update', $usuario) : route('usuarios.store') }}">
    @csrf
    @if ($usuario) @method('PUT') @endif

    <x-molecules.form label="Rut" name="rut" :value="$usuario->rut ?? null" />
    <x-molecules.form label="Nombre" name="nombre" :value="$usuario->nombre ?? null" />
    <x-molecules.form label="Apellido" name="apellido" :value="$usuario->apellido ?? null" />
    <x-molecules.form label="Email (@ventasfix.cl)" name="email" type="email" :value="$usuario->email ?? null" />
    <x-molecules.form
        label="{{ $usuario ? 'Nueva contraseña (dejar vacío para no cambiarla)' : 'Contraseña' }}"
        name="password"
        type="password"
        :required="is_null($usuario)"
    />

    <div class="flex justify-end gap-3 mt-6">
        <a href="{{ route('usuarios.index') }}">
            <x-atoms.button type="button" variant="secondary">Cancelar</x-atoms.button>
        </a>
        <x-atoms.button type="submit" variant="primary">
            {{ $usuario ? 'Guardar cambios' : 'Crear usuario' }}
        </x-atoms.button>
    </div>
</form>
