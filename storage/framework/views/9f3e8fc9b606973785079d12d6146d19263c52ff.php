

<?php $__env->startSection('title', 'Maquinaria'); ?>

<?php $__env->startSection('content'); ?>
<h1>Maquinaria</h1>
<table class="table">
	<thead class="thead-dark">
    <tr>
            <td>ID</td>
            <td>Descripcion</td>
            <td>Tiempo de uso</td>
            <td>Nombre</td>
        </tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $maquinaria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maquinaria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td><center><?php echo e($maquinaria->mez_id); ?></center></td>
                <td><center><?php echo e($maquinaria->mez_descripcion); ?></center></td>
                <td><center><?php echo e($maquinaria->mez_tiemp); ?></center></td>
                <td><center><?php echo e($maquinaria->mez_nombre); ?></center></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/mq/index.blade.php ENDPATH**/ ?>