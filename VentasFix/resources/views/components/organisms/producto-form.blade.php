@props(['producto' => null])

<form method="POST" action="{{ $producto ? route('productos.update', $producto) : route('productos.store') }}" enctype="multipart/form-data">
    @csrf
    @if ($producto) @method('PUT') @endif

    <x-molecules.form label="SKU" name="sku" :value="$producto->sku ?? null" />
    <x-molecules.form label="Nombre" name="nombre" :value="$producto->nombre ?? null" />

    <x-molecules.form label="Descripción corta" name="descripcion_corta" :value="$producto->descripcion_corta ?? null" />
    <p id="contador-corta" class="-mt-3 mb-4 text-xs text-gray-400">0 / 50 palabras (máximo)</p>

    <div class="mb-4">
        <x-atoms.label for="descripcion_larga">Descripción larga</x-atoms.label>
        <textarea name="descripcion_larga" id="descripcion_larga" rows="4" required
            class="w-full px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-xl shadow-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">{{ old('descripcion_larga', $producto->descripcion_larga ?? '') }}</textarea>
        <p id="contador-larga" class="mt-1 text-xs text-gray-400">0 / 50 palabras (mínimo)</p>
        @error('descripcion_larga')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <x-atoms.label for="imagen">Imagen{{ $producto ? ' (dejar vacío para conservar la actual)' : '' }}</x-atoms.label>
        <input type="file" name="imagen" id="imagen" accept="image/*" {{ $producto ? '' : 'required' }}
            class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:bg-indigo-50 file:text-indigo-700 file:text-sm file:font-medium hover:file:bg-indigo-100">
        @if ($producto && $producto->imagen)
            <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}" class="mt-2 h-20 w-20 object-cover rounded-lg border border-gray-200">
        @endif
        @error('imagen')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
        <x-molecules.form label="Precio neto" name="precio_neto" type="number" :value="$producto->precio_neto ?? null" />
        <x-molecules.form label="Stock actual" name="stock_actual" type="number" :value="$producto->stock_actual ?? null" />
        <x-molecules.form label="Stock mínimo" name="stock_minimo" type="number" :value="$producto->stock_minimo ?? null" />
        <x-molecules.form label="Stock bajo" name="stock_bajo" type="number" :value="$producto->stock_bajo ?? null" />
        <x-molecules.form label="Stock alto" name="stock_alto" type="number" :value="$producto->stock_alto ?? null" />
    </div>

    <p class="text-xs text-gray-400 -mt-2 mb-4">El precio de venta (con 19% IVA) se calcula automáticamente al guardar.</p>

    <div class="flex justify-end gap-3 mt-6">
        <a href="{{ route('productos.index') }}">
            <x-atoms.button type="button" variant="secondary">Cancelar</x-atoms.button>
        </a>
        <x-atoms.button type="submit" variant="primary">
            {{ $producto ? 'Guardar cambios' : 'Crear producto' }}
        </x-atoms.button>
    </div>
</form>

<script>
    function contarPalabras(texto) {
        return texto.trim().split(/\s+/).filter(Boolean).length;
    }

    function actualizarContador(inputId, contadorId, limite, tipo) {
        const input = document.getElementById(inputId);
        const contador = document.getElementById(contadorId);
        if (!input || !contador) return;

        const refrescar = () => {
            const total = contarPalabras(input.value);
            const cumple = tipo === 'max' ? total <= limite : total >= limite;
            contador.textContent = `${total} / ${limite} palabras (${tipo === 'max' ? 'máximo' : 'mínimo'})`;
            contador.className = `mt-1 text-xs ${cumple ? 'text-gray-400' : 'text-red-500'}`;
        };

        input.addEventListener('input', refrescar);
        refrescar();
    }

    actualizarContador('descripcion_corta', 'contador-corta', 50, 'max');
    actualizarContador('descripcion_larga', 'contador-larga', 50, 'min');
</script>
