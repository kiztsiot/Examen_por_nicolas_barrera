<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['producto' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['producto' => null]); ?>
<?php foreach (array_filter((['producto' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form method="POST" action="<?php echo e($producto ? route('productos.update', $producto) : route('productos.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php if($producto): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'SKU','name' => 'sku','value' => $producto->sku ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'SKU','name' => 'sku','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->sku ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Nombre','name' => 'nombre','value' => $producto->nombre ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nombre','name' => 'nombre','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->nombre ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Descripción corta','name' => 'descripcion_corta','value' => $producto->descripcion_corta ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Descripción corta','name' => 'descripcion_corta','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->descripcion_corta ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>

    <div class="mb-4">
        <?php if (isset($component)) { $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.label','data' => ['for' => 'descripcion_larga']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'descripcion_larga']); ?>Descripción larga <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $attributes = $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $component = $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
        <textarea name="descripcion_larga" id="descripcion_larga" rows="4" required
            class="w-full px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-xl shadow-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"><?php echo e(old('descripcion_larga', $producto->descripcion_larga ?? '')); ?></textarea>
        <?php $__errorArgs = ['descripcion_larga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-4">
        <?php if (isset($component)) { $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.label','data' => ['for' => 'imagen']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'imagen']); ?>Imagen<?php echo e($producto ? ' (dejar vacío para conservar la actual)' : ''); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $attributes = $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $component = $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
        <input type="file" name="imagen" id="imagen" accept="image/*" <?php echo e($producto ? '' : 'required'); ?>

            class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:bg-indigo-50 file:text-indigo-700 file:text-sm file:font-medium hover:file:bg-indigo-100">
        <?php if($producto && $producto->imagen): ?>
            <img src="<?php echo e(Storage::url($producto->imagen)); ?>" alt="<?php echo e($producto->nombre); ?>" class="mt-2 h-20 w-20 object-cover rounded-lg border border-gray-200">
        <?php endif; ?>
        <?php $__errorArgs = ['imagen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4">
        <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Precio neto','name' => 'precio_neto','type' => 'number','value' => $producto->precio_neto ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Precio neto','name' => 'precio_neto','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->precio_neto ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Stock actual','name' => 'stock_actual','type' => 'number','value' => $producto->stock_actual ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Stock actual','name' => 'stock_actual','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->stock_actual ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Stock mínimo','name' => 'stock_minimo','type' => 'number','value' => $producto->stock_minimo ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Stock mínimo','name' => 'stock_minimo','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->stock_minimo ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Stock bajo','name' => 'stock_bajo','type' => 'number','value' => $producto->stock_bajo ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Stock bajo','name' => 'stock_bajo','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->stock_bajo ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Stock alto','name' => 'stock_alto','type' => 'number','value' => $producto->stock_alto ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Stock alto','name' => 'stock_alto','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($producto->stock_alto ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $attributes = $__attributesOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__attributesOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76254b68841724ac474f0c37105fdaa7)): ?>
<?php $component = $__componentOriginal76254b68841724ac474f0c37105fdaa7; ?>
<?php unset($__componentOriginal76254b68841724ac474f0c37105fdaa7); ?>
<?php endif; ?>
    </div>

    <p class="text-xs text-gray-400 -mt-2 mb-4">El precio de venta (con 19% IVA) se calcula automáticamente al guardar.</p>

    <div class="flex justify-end gap-3 mt-6">
        <a href="<?php echo e(route('productos.index')); ?>">
            <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'button','variant' => 'secondary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','variant' => 'secondary']); ?>Cancelar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $attributes = $__attributesOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__attributesOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $component = $__componentOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__componentOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
        </a>
        <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'submit','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','variant' => 'primary']); ?>
            <?php echo e($producto ? 'Guardar cambios' : 'Crear producto'); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $attributes = $__attributesOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__attributesOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $component = $__componentOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__componentOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
    </div>
</form>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/components/organisms/producto-form.blade.php ENDPATH**/ ?>