

<?php $__env->startSection('title', 'Productos'); ?>

<?php $__env->startSection('content'); ?>
<h1>Productos</h1>
    
    <table class="table">
        
        <thead class="thead-dark">
            <tr>
                <td>Productos ID</td>
                <td>Nombre</td>
                <td>Precio de venta al publico</td>
                <td>Precio al por mayor</td>
                <td>Descripcion</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><center><?php echo e($producto->pro_id); ?></center></td>
                    <td><center><?php echo e($producto->pro_nombre); ?></center></td>
                    <td><center><?php echo e($producto->pro_pvp); ?></center></td>
                    <td><center><?php echo e($producto->pro_pvadistri); ?></center></td>
                    <td><center><?php echo e($producto->pro_descripcion); ?></center></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/p/index.blade.php ENDPATH**/ ?>