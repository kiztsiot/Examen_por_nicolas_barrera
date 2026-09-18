<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title' => null]); ?>
<?php foreach (array_filter((['title' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <?php if($title || isset($action)): ?>
        <div class="flex items-center justify-between mb-6">
            <?php if($title): ?>
                <h1 class="text-2xl font-semibold text-gray-900"><?php echo e($title); ?></h1>
            <?php endif; ?>

            <?php if(isset($action)): ?>
                <?php echo e($action); ?>

            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix3\resources\views/components/templates/card.blade.php ENDPATH**/ ?>