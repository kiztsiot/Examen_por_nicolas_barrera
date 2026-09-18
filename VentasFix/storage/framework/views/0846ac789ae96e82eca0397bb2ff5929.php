<?php $__env->startSection('title', 'Productos - VentasFix'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalb6465873ac8948cd44654f28d2f0dfa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6465873ac8948cd44654f28d2f0dfa8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.card','data' => ['title' => 'Productos']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('templates.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Productos']); ?>
         <?php $__env->slot('action', null, []); ?> 
            <a href="<?php echo e(route('productos.create')); ?>">
                <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'button','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','variant' => 'primary']); ?>+ Nuevo producto <?php echo $__env->renderComponent(); ?>
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
         <?php $__env->endSlot(); ?>

        <?php if (isset($component)) { $__componentOriginal5049d8ba25aa697e2dbcf5f5ca5e980d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5049d8ba25aa697e2dbcf5f5ca5e980d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.producto-table','data' => ['productos' => $productos]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.producto-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['productos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($productos)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5049d8ba25aa697e2dbcf5f5ca5e980d)): ?>
<?php $attributes = $__attributesOriginal5049d8ba25aa697e2dbcf5f5ca5e980d; ?>
<?php unset($__attributesOriginal5049d8ba25aa697e2dbcf5f5ca5e980d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5049d8ba25aa697e2dbcf5f5ca5e980d)): ?>
<?php $component = $__componentOriginal5049d8ba25aa697e2dbcf5f5ca5e980d; ?>
<?php unset($__componentOriginal5049d8ba25aa697e2dbcf5f5ca5e980d); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb6465873ac8948cd44654f28d2f0dfa8)): ?>
<?php $attributes = $__attributesOriginalb6465873ac8948cd44654f28d2f0dfa8; ?>
<?php unset($__attributesOriginalb6465873ac8948cd44654f28d2f0dfa8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6465873ac8948cd44654f28d2f0dfa8)): ?>
<?php $component = $__componentOriginalb6465873ac8948cd44654f28d2f0dfa8; ?>
<?php unset($__componentOriginalb6465873ac8948cd44654f28d2f0dfa8); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/pages/productos/index.blade.php ENDPATH**/ ?>