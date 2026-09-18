<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['usuario' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['usuario' => null]); ?>
<?php foreach (array_filter((['usuario' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form method="POST" action="<?php echo e($usuario ? route('usuarios.update', $usuario) : route('usuarios.store')); ?>">
    <?php echo csrf_field(); ?>
    <?php if($usuario): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Rut','name' => 'rut','value' => $usuario->rut ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Rut','name' => 'rut','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuario->rut ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Nombre','name' => 'nombre','value' => $usuario->nombre ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nombre','name' => 'nombre','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuario->nombre ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Apellido','name' => 'apellido','value' => $usuario->apellido ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Apellido','name' => 'apellido','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuario->apellido ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Email (@ventasfix.cl)','name' => 'email','type' => 'email','value' => $usuario->email ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Email (@ventasfix.cl)','name' => 'email','type' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuario->email ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => ''.e($usuario ? 'Nueva contraseña (dejar vacío para no cambiarla)' : 'Contraseña').'','name' => 'password','type' => 'password','required' => is_null($usuario)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e($usuario ? 'Nueva contraseña (dejar vacío para no cambiarla)' : 'Contraseña').'','name' => 'password','type' => 'password','required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(is_null($usuario))]); ?>
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

    <div class="flex justify-end gap-3 mt-6">
        <a href="<?php echo e(route('usuarios.index')); ?>">
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
            <?php echo e($usuario ? 'Guardar cambios' : 'Crear usuario'); ?>

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
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/components/organisms/usuario-form.blade.php ENDPATH**/ ?>