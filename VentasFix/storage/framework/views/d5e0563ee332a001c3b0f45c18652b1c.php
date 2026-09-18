<?php $__env->startSection('title', 'Dashboard - VentasFix'); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-2xl font-semibold text-black mb-6">Inicio</h1>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <?php if (isset($component)) { $__componentOriginal4832f0b078a8b9d93427af63e729edd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4832f0b078a8b9d93427af63e729edd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.stat-card','data' => ['label' => 'Usuarios','value' => $totalUsuarios]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Usuarios','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($totalUsuarios)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4832f0b078a8b9d93427af63e729edd0)): ?>
<?php $attributes = $__attributesOriginal4832f0b078a8b9d93427af63e729edd0; ?>
<?php unset($__attributesOriginal4832f0b078a8b9d93427af63e729edd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4832f0b078a8b9d93427af63e729edd0)): ?>
<?php $component = $__componentOriginal4832f0b078a8b9d93427af63e729edd0; ?>
<?php unset($__componentOriginal4832f0b078a8b9d93427af63e729edd0); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal4832f0b078a8b9d93427af63e729edd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4832f0b078a8b9d93427af63e729edd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.stat-card','data' => ['label' => 'Productos','value' => $totalProductos]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Productos','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($totalProductos)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4832f0b078a8b9d93427af63e729edd0)): ?>
<?php $attributes = $__attributesOriginal4832f0b078a8b9d93427af63e729edd0; ?>
<?php unset($__attributesOriginal4832f0b078a8b9d93427af63e729edd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4832f0b078a8b9d93427af63e729edd0)): ?>
<?php $component = $__componentOriginal4832f0b078a8b9d93427af63e729edd0; ?>
<?php unset($__componentOriginal4832f0b078a8b9d93427af63e729edd0); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal4832f0b078a8b9d93427af63e729edd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4832f0b078a8b9d93427af63e729edd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.stat-card','data' => ['label' => 'Clientes','value' => $totalClientes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Clientes','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($totalClientes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4832f0b078a8b9d93427af63e729edd0)): ?>
<?php $attributes = $__attributesOriginal4832f0b078a8b9d93427af63e729edd0; ?>
<?php unset($__attributesOriginal4832f0b078a8b9d93427af63e729edd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4832f0b078a8b9d93427af63e729edd0)): ?>
<?php $component = $__componentOriginal4832f0b078a8b9d93427af63e729edd0; ?>
<?php unset($__componentOriginal4832f0b078a8b9d93427af63e729edd0); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/pages/dashboard/index.blade.php ENDPATH**/ ?>