<?php $__env->startSection('title', 'Editar usuario - VentasFix'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalb6465873ac8948cd44654f28d2f0dfa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6465873ac8948cd44654f28d2f0dfa8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.card','data' => ['title' => 'Editar usuario']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('templates.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Editar usuario']); ?>
        <?php if (isset($component)) { $__componentOriginal539dd7b1deb71e006d403cd0ec4abda8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal539dd7b1deb71e006d403cd0ec4abda8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.usuario-form','data' => ['usuario' => $usuario]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.usuario-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['usuario' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuario)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal539dd7b1deb71e006d403cd0ec4abda8)): ?>
<?php $attributes = $__attributesOriginal539dd7b1deb71e006d403cd0ec4abda8; ?>
<?php unset($__attributesOriginal539dd7b1deb71e006d403cd0ec4abda8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal539dd7b1deb71e006d403cd0ec4abda8)): ?>
<?php $component = $__componentOriginal539dd7b1deb71e006d403cd0ec4abda8; ?>
<?php unset($__componentOriginal539dd7b1deb71e006d403cd0ec4abda8); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/pages/usuarios/edit.blade.php ENDPATH**/ ?>