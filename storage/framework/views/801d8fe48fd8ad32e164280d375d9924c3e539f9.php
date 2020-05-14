

<?php $__env->startSection('title', 'Oreden de Trabajo'); ?>

<?php $__env->startSection('content'); ?>
<h1>Oreden de Trabajo</h1>
<table class="table">
	<thead class="thead-dark">
        <tr>
            <td>Orden ID</td>
            <td>Empleado ID</td>
            <td>Estandar ID</td>
            <td>Fecha Inico</td>
            <td>Fecha Fin</td>
        </tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $oreden_detrabajo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oreden_detrabajo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($oreden_detrabajo->ord_id); ?></center></td>
                    <td><center><?php echo e($oreden_detrabajo->emp_id); ?></center></td>
                    <td><center><?php echo e($oreden_detrabajo->est_id); ?></center></td>
                    <td><center><?php echo e($oreden_detrabajo->ord_fecha_ini); ?></center></td>
                    <td><center><?php echo e($oreden_detrabajo->ord_fecha_fin); ?></center></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/ot/index.blade.php ENDPATH**/ ?>