<?php
    $enlaces = [
      
        ['ruta' => 'usuarios.index', 'label' => 'Usuarios'],
        ['ruta' => 'productos.index', 'label' => 'Productos'],
        ['ruta' => 'clientes.index', 'label' => 'Clientes'],
    ];
?>

<nav class="bg-blue-400 border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

           <div class="flex items-center gap-8">
                <a href="<?php echo e(route('dashboard')); ?>" class="flex items-center">
                     <img src="<?php echo e(asset('images/logo.png')); ?>" alt="VentasFix" class="h-9 w-auto">
                </a>

                <div class="hidden sm:flex gap-1"> 
                    <?php $__currentLoopData = $enlaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enlace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a
                            href="<?php echo e(route($enlace['ruta'])); ?>"
                            class="px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-150
                                <?php echo e(request()->routeIs(explode('.', $enlace['ruta'])[0] . '*')
                                    ? 'bg-indigo-50 text-indigo-700'
                                    : 'text-black-600 hover:bg-orange-600 hover:text-black'); ?>"
                        >
                            <?php echo e($enlace['label']); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <?php if(auth()->guard()->check()): ?>
                    <span class="text-sm text-black-500 hidden sm:inline">
                        <?php echo e(auth()->user()->nombre); ?> <?php echo e(auth()->user()->apellido); ?>

                    </span>

                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'submit','variant' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','variant' => 'danger']); ?>
                            Cerrar sesión
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
                    </form>
                <?php endif; ?>
            </div>

        </div>
    </div>
</nav>
<?php /**PATH C:\Users\holan\Downloads\VentasFix\VentasFix-fix3\resources\views/components/organisms/navbar.blade.php ENDPATH**/ ?>