@props(['cliente' => null])

<form method="POST" action="{{ $cliente ? route('clientes.update', $cliente) : route('clientes.store') }}">
    @csrf
    @if ($cliente) @method('PUT') @endif

    <x-molecules.form label="Rut empresa" name="rut_empresa" :value="$cliente->rut_empresa ?? null" />
    <x-molecules.form label="Razón social" name="razon_social" :value="$cliente->razon_social ?? null" />
    <x-molecules.form label="Rubro" name="rubro" :value="$cliente->rubro ?? null" />
    <x-molecules.form label="Teléfono" name="telefono" :value="$cliente->telefono ?? null" />
    <x-molecules.form label="Dirección" name="direccion" :value="$cliente->direccion ?? null" />
    <x-molecules.form label="Nombre de contacto" name="contacto_nombre" :value="$cliente->contacto_nombre ?? null" />
    <x-molecules.form label="Email de contacto" name="contacto_email" type="email" :value="$cliente->contacto_email ?? null" />

    <div class="flex justify-end gap-3 mt-6">
        <a href="{{ route('clientes.index') }}">
            <x-atoms.button type="button" variant="secondary">Cancelar</x-atoms.button>
        </a>
        <x-atoms.button type="submit" variant="primary">
            {{ $cliente ? 'Guardar cambios' : 'Crear cliente' }}
        </x-atoms.button>
    </div>
</form>
