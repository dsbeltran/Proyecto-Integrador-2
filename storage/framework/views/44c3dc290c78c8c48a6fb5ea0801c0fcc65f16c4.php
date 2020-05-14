

<?php $__env->startSection('title', 'Cliente'); ?>
<link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
<link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
<?php $__env->startSection('content'); ?>
    <h1>Clientes</h1>
    <div class="content">
    <div class="animated fadeIn">
        <div class="caja">
            <div class="contenedor">
                <div class="c">
                    <div class="foto">
                        <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                    </div>
                    <div class="c1" aling="center">
                        <h1>Nombre:</h1>
                        <h2>Descripcion</h2>
                    </div>
                </div>

            </div>
            <div class="contenedorn">
                <div class="n">
                <table class="table">
	                <thead class="thead-dark">
                        <tr>
                           <td>ID</td>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Telefono</td>
                        </tr>        
	                </thead>
	                <tbody>
                        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><center><?php echo e($cliente->cli_id); ?></center></td>
                        <td><center><?php echo e($cliente->cli_nombreyapellido); ?></center></td>
                        <td><center><?php echo e($cliente->cli_direccion); ?></center></td>
                        <td><center><?php echo e($cliente->cli_telefono); ?></center></td>
                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	    </tbody>
                    
                </table>
                </div>
            </div>


        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/c/index.blade.php ENDPATH**/ ?>