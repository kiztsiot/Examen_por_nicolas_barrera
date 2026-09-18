<?php $__env->startSection('title', 'Ingresar - VentasFix'); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-sm bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <h1 class="text-xl font-semibold text-gray-900 mb-6 text-center">VentasFix</h1>

            <form method="POST" action="<?php echo e(route('login.attempt')); ?>">
                <?php echo csrf_field(); ?>

                <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Email','name' => 'email','type' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Email','name' => 'email','type' => 'email']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Contraseña','name' => 'password','type' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Contraseña','name' => 'password','type' => 'password']); ?>
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

                <label class="flex items-center gap-2 text-sm text-gray-600 mb-6">
                    <input type="checkbox" name="recordar" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    Recordarme
                </label>

                <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'submit','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','variant' => 'primary']); ?>Ingresar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $attributes = $__attributesOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__attributesOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $component = $__componentOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__componentOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
            </form>

            <p class="text-sm text-gray-500 text-center mt-4">
                <a href="<?php echo e(route('register')); ?>" class="text-indigo-600 hover:text-indigo-800">Crear cuenta</a>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/pages/auth/login.blade.php ENDPATH**/ ?>