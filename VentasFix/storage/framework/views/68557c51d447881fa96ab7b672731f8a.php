<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['clientes']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['clientes']); ?>
<?php foreach (array_filter((['clientes']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr class="text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                <th class="px-4 py-3">Rut empresa</th>
                <th class="px-4 py-3">Razón social</th>
                <th class="px-4 py-3">Rubro</th>
                <th class="px-4 py-3">Contacto</th>
                <th class="px-4 py-3 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-4 py-3 text-sm text-gray-700"><?php echo e($cliente->rut_empresa); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900"><?php echo e($cliente->razon_social); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-500"><?php echo e($cliente->rubro); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-500"><?php echo e($cliente->contacto_nombre); ?></td>
                    <td class="px-4 py-3 text-sm text-right space-x-2">
                        <a href="<?php echo e(route('clientes.edit', $cliente)); ?>" class="text-indigo-600 hover:text-indigo-800">Editar</a>
                        <form action="<?php echo e(route('clientes.destroy', $cliente)); ?>" method="POST" class="inline"
                              onsubmit="return confirm('¿Eliminar este cliente?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="px-4 py-6 text-center text-sm text-gray-400">Sin clientes registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <?php echo e($clientes->links()); ?>

</div>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix3\resources\views/components/organisms/cliente-table.blade.php ENDPATH**/ ?>