<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('sitio.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <?php echo $__env->make('sitio.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</nav>
<br><br><br>
<br><br><br>
<br><br><br>
<!-- Masthead-->
<header class="py-12 text-center container">
    <?php echo $__env->yieldContent('content'); ?>
</header>

<br><br><br>
<br><br><br>
<br><br><br>

<!-- Portfolio Section-->

<!-- About Section-->

<!-- Contact Section-->

<!-- Footer-->
<footer class="py-5 my-6 bg-secondary">

    <?php echo $__env->make('sitio.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>
<!-- Copyright Section-->



<?php echo $__env->make('sitio.includes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Infinitum-main\resources\views/sitio/layaout/acercade.blade.php ENDPATH**/ ?>