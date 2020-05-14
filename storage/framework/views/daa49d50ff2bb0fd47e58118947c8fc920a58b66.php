

<?php $__env->startSection('title', 'Inicio de Sesion'); ?>
<?php $__env->startSection('content'); ?>
<header>
<link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
</header>
<div class="login-page">
            <div class="form">
              <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
              </form>
              <form class="login-form">
                <input type="text" placeholder="username"/>
                <input type="password" placeholder="password"/>
                <button>login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
              </form>
            </div>
          </div>
          <script src="assets/js/Sesion.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/0_Sesion.blade.php ENDPATH**/ ?>