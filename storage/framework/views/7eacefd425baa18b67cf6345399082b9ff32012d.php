

<?php $__env->startSection('title', 'Estandar de Produccion'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Estandar de Produccion</h1>
<table class="table">
	<thead class="thead-dark">
        <tr>
            <td>Estandar ID</td>
            <td>Maquinaria ID</td>
            <td>Materia prima ID</td>
            <td>Nombre</td>
            <td>Descripción</td>
        </tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $estandar_de_produccion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estandar_de_produccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td><center><?php echo e($estandar_de_produccion->est_id); ?></center></td>
                <td><center><?php echo e($estandar_de_produccion->mez_id); ?></center></td>
                <td><center><?php echo e($estandar_de_produccion->qui_id); ?></center></td>
                <td><center><?php echo e($estandar_de_produccion->est_nombre); ?></center></td>
                <td><center><?php echo e($estandar_de_produccion->est_descripcion); ?></center></td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/es/index.blade.php ENDPATH**/ ?>