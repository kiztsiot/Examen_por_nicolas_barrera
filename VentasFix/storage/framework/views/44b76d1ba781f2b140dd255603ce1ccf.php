<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['variant' => 'neutral']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['variant' => 'neutral']); ?>
<?php foreach (array_filter((['variant' => 'neutral']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $baseClasses = "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium";

    $variants = [
        'success' => "bg-green-100 text-green-800",
        'warning' => "bg-yellow-100 text-yellow-800",
        'danger' => "bg-red-100 text-red-800",
        'info' => "bg-blue-100 text-blue-800",
        'neutral' => "bg-gray-100 text-gray-800",
    ];

    $classes = $variants[$variant] ?? $variants['neutral'];
?>

<span <?php echo e($attributes->merge(['class' => "$baseClasses $classes"])); ?>>
    <?php echo e($slot); ?>

</span>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix3\resources\views/components/atoms/badge.blade.php ENDPATH**/ ?>