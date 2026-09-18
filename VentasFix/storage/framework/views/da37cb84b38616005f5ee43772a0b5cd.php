<?php $__env->startSection('title', 'Nuevo cliente - VentasFix'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalb6465873ac8948cd44654f28d2f0dfa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6465873ac8948cd44654f28d2f0dfa8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.card','data' => ['title' => 'Nuevo cliente']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('templates.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nuevo cliente']); ?>
        <?php if (isset($component)) { $__componentOriginalecafa698ace772f349a7dbd7e7d7f950 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecafa698ace772f349a7dbd7e7d7f950 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.cliente-form','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.cliente-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecafa698ace772f349a7dbd7e7d7f950)): ?>
<?php $attributes = $__attributesOriginalecafa698ace772f349a7dbd7e7d7f950; ?>
<?php unset($__attributesOriginalecafa698ace772f349a7dbd7e7d7f950); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecafa698ace772f349a7dbd7e7d7f950)): ?>
<?php $component = $__componentOriginalecafa698ace772f349a7dbd7e7d7f950; ?>
<?php unset($__componentOriginalecafa698ace772f349a7dbd7e7d7f950); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/pages/clientes/create.blade.php ENDPATH**/ ?>