

<?php $__env->startSection('title', 'O Descrip'); ?>

<?php $__env->startSection('content'); ?>
<h1>Orden Descripcion</h1>
<table class="table">
	<thead class="thead-dark">
        <tr>
            <td>O Descrip ID</td>
            <td>Producto ID</td>
            <td>Oreden ID</td>
            <td>Descripcion</td>
        </tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $oreden_detrabajodescrip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oreden_detrabajodescrip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($oreden_detrabajodescrip->odes_id); ?></center></td>
                    <td><center><?php echo e($oreden_detrabajodescrip->pro_id); ?></center></td>
                    <td><center><?php echo e($oreden_detrabajodescrip->ord_id); ?></center></td>
                    <td><center><?php echo e($oreden_detrabajodescrip->odes_desc); ?></center></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/otdes/index.blade.php ENDPATH**/ ?>