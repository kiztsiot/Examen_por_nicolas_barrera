<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'VentasFix - Backoffice'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body class="bg-gray-50 min-h-screen">

    <?php if(auth()->guard()->check()): ?>
        <?php if (isset($component)) { $__componentOriginal0a7b5cef563bbe08e0cbab8f95a4b052 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a7b5cef563bbe08e0cbab8f95a4b052 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a7b5cef563bbe08e0cbab8f95a4b052)): ?>
<?php $attributes = $__attributesOriginal0a7b5cef563bbe08e0cbab8f95a4b052; ?>
<?php unset($__attributesOriginal0a7b5cef563bbe08e0cbab8f95a4b052); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a7b5cef563bbe08e0cbab8f95a4b052)): ?>
<?php $component = $__componentOriginal0a7b5cef563bbe08e0cbab8f95a4b052; ?>
<?php unset($__componentOriginal0a7b5cef563bbe08e0cbab8f95a4b052); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
            <div class="bg-green-50 border border-green-200 text-green-800 text-sm rounded-xl px-4 py-3">
                <?php echo e(session('success')); ?>

            </div>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix3\resources\views/layouts/app.blade.php ENDPATH**/ ?>