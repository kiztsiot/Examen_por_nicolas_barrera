<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'value']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'value']); ?>
<?php foreach (array_filter((['label', 'value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="bg-blue-100 rounded-2xl shadow-sm border border-gray-100 p-6">
    <p class="text-sm font-medium text-gray-500"><?php echo e($label); ?></p>
    <p class="mt-2 text-3xl font-semibold text-gray-900"><?php echo e($value); ?></p>
</div>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/components/molecules/stat-card.blade.php ENDPATH**/ ?>