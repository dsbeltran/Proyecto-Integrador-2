<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/icon.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/icon.png')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/cs-skin-elastic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo e(url('/Home')); ?>"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                    </li>
                    <li class="menu-title">Opciones</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Cliente</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('/Cliente')); ?>">Ver Clientes</a></li>
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('/Cliente/create')); ?>">Crear Clientes</a></li>                            
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Empleado</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('/Empleado')); ?>">Ver Empleados</a></li>
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('/Empleado/create')); ?>">Crear Empleado</a></li>                              
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Estandar de produccion</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Estandar_de_produccion')); ?>">Ver Estandares de produccion</a></li>    
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Estandar_de_produccion/create')); ?>">Crear Estandar de produccion</a></li>                          
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Gerente</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Gerente')); ?>">Ver Gerentes</a></li>
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Gerente/create')); ?>">Crear Gerente</a></li>                            
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maquinaria</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Maquinaria')); ?>">Ver Maquinarias</a></li>
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Maquinaria/create')); ?>">Añadir Maquinaria</a></li> 
                            </ul>
                        </li><li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Materia Prima</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Materia_prima')); ?>">Ver Materia Prima</a></li>   
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Materia_prima/create')); ?>">Añadir Materia Prima</a></li>                            
                            </ul>
                        </li>
                        
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Orden de trabajo</a>
                            <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('/Oreden_detrabajo')); ?>">Ver Orden de trabajo</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="<?php echo e(url('/Oreden_detrabajo/create')); ?>">Crear Orden de trabajo</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Orden Descripcion</a>
                            <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('/Oreden_detrabajodescrip')); ?>">Ver Orden de Trabajo Descripcion</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="<?php echo e(url('/Oreden_detrabajodescrip/create')); ?>">Crear Orden de Trabajo Descripcion</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Producto</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Producto')); ?>">Ver Productos</a></li>
                                <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo e(url('Producto/create')); ?>">Crear Producto</a></li>                             
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Ventas</a>
                            <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo e(url('/Venta')); ?>">Ver venta</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo e(url('/Venta/create')); ?>">Crear venta</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Venta Decripcion</a>
                            <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="<?php echo e(url('/Venta_descripcion')); ?>">Ver Venta Descripcion</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="<?php echo e(url('/Venta_descripcion/create')); ?>">Crear Venta Descripcion</a></li>
                            </ul>
                        </li>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="assets/images/logo2.png" alt="Logo" style="max-height: 40px;"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
        <div class="content">
            <div class="animated fadeIn">
                <?php echo $__env->yieldContent('content'); ?>
            </div><!-- .animated -->
        </div>
    <div class="clearfix"></div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/init/chartjs-init.js"></script>
    <!--Flot Chart-->
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>


</body>
</html>
<?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/index.blade.php ENDPATH**/ ?>