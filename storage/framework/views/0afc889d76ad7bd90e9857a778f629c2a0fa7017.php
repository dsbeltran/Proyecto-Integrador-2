

<?php $__env->startSection('title', 'Materia Prima'); ?>

<?php $__env->startSection('content'); ?>
<h1>Materia Prima</h1>
<table class="table">
	<thead class="thead-dark">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Precio</td>
        </tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $materia_prima; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia_prima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                
                    <td><center><?php echo e($materia_prima->qui_id); ?></center></td>
                    <td><center><?php echo e($materia_prima->qui_nombre); ?></center></td>
                    <td><center><?php echo e($materia_prima->qui_descrip); ?></center></td>
                    <td><center><?php echo e($materia_prima->qui_preciocompra); ?></center></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/mt/index.blade.php ENDPATH**/ ?>