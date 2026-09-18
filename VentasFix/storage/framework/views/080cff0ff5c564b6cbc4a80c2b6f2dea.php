<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['productos']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['productos']); ?>
<?php foreach (array_filter((['productos']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

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
            <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-4 py-3 text-sm text-black-700"><?php echo e($producto->sku); ?></td>
                    <td class="px-4 py-3 text-sm text-black-900"><?php echo e($producto->nombre); ?></td>
                    <td class="px-4 py-3 text-sm text-black-700">$<?php echo e(number_format($producto->precio_venta, 0, ',', '.')); ?></td>
                    <td class="px-4 py-3 text-sm">
                        <?php if($producto->stock_actual <= $producto->stock_bajo): ?>
                            <?php if (isset($component)) { $__componentOriginald550e4f46a9f9637f084f5df2326e52c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald550e4f46a9f9637f084f5df2326e52c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.badge','data' => ['variant' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'danger']); ?><?php echo e($producto->stock_actual); ?> - Stock bajo <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $attributes = $__attributesOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $component = $__componentOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__componentOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
                        <?php elseif($producto->stock_actual >= $producto->stock_alto): ?>
                            <?php if (isset($component)) { $__componentOriginald550e4f46a9f9637f084f5df2326e52c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald550e4f46a9f9637f084f5df2326e52c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.badge','data' => ['variant' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'success']); ?><?php echo e($producto->stock_actual); ?> - Stock alto <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $attributes = $__attributesOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $component = $__componentOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__componentOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginald550e4f46a9f9637f084f5df2326e52c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald550e4f46a9f9637f084f5df2326e52c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.badge','data' => ['variant' => 'info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'info']); ?><?php echo e($producto->stock_actual); ?> - Normal <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $attributes = $__attributesOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__attributesOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald550e4f46a9f9637f084f5df2326e52c)): ?>
<?php $component = $__componentOriginald550e4f46a9f9637f084f5df2326e52c; ?>
<?php unset($__componentOriginald550e4f46a9f9637f084f5df2326e52c); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-sm text-right space-x-2">
                        <a href="<?php echo e(route('productos.edit', $producto)); ?>" class="text-indigo-600 hover:text-indigo-800">Editar</a>
                        <form action="<?php echo e(route('productos.destroy', $producto)); ?>" method="POST" class="inline"
                              onsubmit="return confirm('¿Eliminar este producto?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="px-4 py-6 text-center text-sm text-gray-400">Sin productos registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <?php echo e($productos->links()); ?>

</div>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/components/organisms/producto-table.blade.php ENDPATH**/ ?>