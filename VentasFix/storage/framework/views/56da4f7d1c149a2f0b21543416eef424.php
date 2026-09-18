<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'name', 'type' => 'text', 'required' => true, 'value' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'name', 'type' => 'text', 'required' => true, 'value' => null]); ?>
<?php foreach (array_filter((['label', 'name', 'type' => 'text', 'required' => true, 'value' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="mb-4">
    <?php if (isset($component)) { $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.label','data' => ['for' => $name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name)]); ?><?php echo e($label); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $attributes = $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $component = $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginala7ad5a6e359798f829f48ad8e292a778 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala7ad5a6e359798f829f48ad8e292a778 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.input','data' => ['type' => $type,'name' => $name,'required' => $required,'value' => ''.e(old($name, $value)).'','class' => $errors->has($name) ? 'border-red-400 focus:ring-red-400 focus:border-red-400' : '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($required),'value' => ''.e(old($name, $value)).'','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->has($name) ? 'border-red-400 focus:ring-red-400 focus:border-red-400' : '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala7ad5a6e359798f829f48ad8e292a778)): ?>
<?php $attributes = $__attributesOriginala7ad5a6e359798f829f48ad8e292a778; ?>
<?php unset($__attributesOriginala7ad5a6e359798f829f48ad8e292a778); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7ad5a6e359798f829f48ad8e292a778)): ?>
<?php $component = $__componentOriginala7ad5a6e359798f829f48ad8e292a778; ?>
<?php unset($__componentOriginala7ad5a6e359798f829f48ad8e292a778); ?>
<?php endif; ?>

    <?php $__errorArgs = [$name];
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
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/components/molecules/form.blade.php ENDPATH**/ ?>