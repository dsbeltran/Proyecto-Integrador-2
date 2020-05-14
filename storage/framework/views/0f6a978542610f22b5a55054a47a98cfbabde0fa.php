

<?php $__env->startSection('title', 'Venta'); ?>

<?php $__env->startSection('content'); ?>
<h1>Venta</h1>
    <table class="table">
	    <thead class="thead-dark">
            <tr>
                <td>Venta ID</td>
                <td>Cliente ID</td>
                <td>Empleado ID</td>
                <td>Fecha </td>
                <td>Fecha de Entrega</td>

            </tr>
    	</thead>
    	<tbody>
            <?php $__currentLoopData = $venta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><center><?php echo e($venta->ven_id); ?></center></td>
                    <td><center><?php echo e($venta->cli_id); ?></center></td>
                    <td><center><?php echo e($venta->emp_id); ?></center></td>
                    <td><center><?php echo e($venta->ven_fecha); ?></center></td>
                    <td><center><?php echo e($venta->ven_fechaentrega); ?></center></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</tbody>
    </table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/v/index.blade.php ENDPATH**/ ?>