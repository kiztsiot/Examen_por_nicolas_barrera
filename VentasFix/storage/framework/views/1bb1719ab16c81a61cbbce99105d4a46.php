<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['cliente' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['cliente' => null]); ?>
<?php foreach (array_filter((['cliente' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form method="POST" action="<?php echo e($cliente ? route('clientes.update', $cliente) : route('clientes.store')); ?>">
    <?php echo csrf_field(); ?>
    <?php if($cliente): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal76254b68841724ac474f0c37105fdaa7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76254b68841724ac474f0c37105fdaa7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Rut empresa','name' => 'rut_empresa','value' => $cliente->rut_empresa ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Rut empresa','name' => 'rut_empresa','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cliente->rut_empresa ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Razón social','name' => 'razon_social','value' => $cliente->razon_social ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Razón social','name' => 'razon_social','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cliente->razon_social ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Rubro','name' => 'rubro','value' => $cliente->rubro ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Rubro','name' => 'rubro','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cliente->rubro ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Teléfono','name' => 'telefono','value' => $cliente->telefono ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Teléfono','name' => 'telefono','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cliente->telefono ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Dirección','name' => 'direccion','value' => $cliente->direccion ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Dirección','name' => 'direccion','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cliente->direccion ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Nombre de contacto','name' => 'contacto_nombre','value' => $cliente->contacto_nombre ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nombre de contacto','name' => 'contacto_nombre','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cliente->contacto_nombre ?? null)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form','data' => ['label' => 'Email de contacto','name' => 'contacto_email','type' => 'email','value' => $cliente->contacto_email ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Email de contacto','name' => 'contacto_email','type' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cliente->contacto_email ?? null)]); ?>
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
        <a href="<?php echo e(route('clientes.index')); ?>">
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
            <?php echo e($cliente ? 'Guardar cambios' : 'Crear cliente'); ?>

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
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/components/organisms/cliente-form.blade.php ENDPATH**/ ?>