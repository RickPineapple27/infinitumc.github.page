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
<br>

<!-- Masthead-->
<header class="py-5 text-center container ">


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <img src="assets/img/portfolio/ramirez.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item ">
                <img src="assets/img/portfolio/checo.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <p>Contratar ahora es más fácil,te ofrecemos un formulario en el que puedes dejarnos tus datos para posteriormente comunicarnos contigo y así poder adquirir cualquier paquete que Infinitum tiene para ti</p>
    <br>

    <p  class="d-grid gap-2 col-6 mx-auto"><a href="<?php echo e(route('sitio.contactanos')); ?>" class="btn btn-info">¡Contrata ya!</a></p>




<br>



</header>


<br>

<br>


<br>

<br>
<?php echo $__env->yieldContent('content'); ?>
<!-- Portfolio Section-->

<!-- About Section-->

<!-- Contact Section-->

<!-- Footer-->
<br>

<br>
<footer class="py-5 my-6 bg-secondary">

<?php echo $__env->make('sitio.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>
<!-- Copyright Section-->



<?php echo $__env->make('sitio.includes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Infinitum-main\resources\views/sitio/layaout/template.blade.php ENDPATH**/ ?>