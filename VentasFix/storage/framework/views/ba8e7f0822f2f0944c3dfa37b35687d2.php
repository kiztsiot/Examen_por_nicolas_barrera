<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['usuarios']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['usuarios']); ?>
<?php foreach (array_filter((['usuarios']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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
            <tr class="text-left text-xs font-medium text-black uppercase tracking-wider">
                <th class="px-4 py-3">Rut</th>
                <th class="px-4 py-3">Nombre</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-black">
            <?php $__empty_1 = true; $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-4 py-3 text-sm text-black-700"><?php echo e($usuario->rut); ?></td>
                    <td class="px-4 py-3 text-sm text-black-900"><?php echo e($usuario->nombre); ?> <?php echo e($usuario->apellido); ?></td>
                    <td class="px-4 py-3 text-sm text-black-500"><?php echo e($usuario->email); ?></td>
                    <td class="px-4 py-3 text-sm text-right space-x-2">
                        <a href="<?php echo e(route('usuarios.edit', $usuario)); ?>" class="text-blue-700 hover:text-indigo-800">Editar</a>
                        <form action="<?php echo e(route('usuarios.destroy', $usuario)); ?>" method="POST" class="inline"
                              onsubmit="return confirm('¿Eliminar este usuario?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-400">Sin usuarios registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <?php echo e($usuarios->links()); ?>

</div>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix2\resources\views/components/organisms/usuario-table.blade.php ENDPATH**/ ?>