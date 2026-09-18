@props(['label', 'name', 'type' => 'text', 'required' => true, 'value' => null])

<div class="mb-4">
    <x-atoms.label :for="$name">{{ $label }}</x-atoms.label>

    <x-atoms.input
        :type="$type"
        :name="$name"
        :required="$required"
        value="{{ old($name, $value) }}"
        :class="$errors->has($name) ? 'border-red-400 focus:ring-red-400 focus:border-red-400' : ''"
    />

    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
