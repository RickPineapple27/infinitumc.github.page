<?php $__env->startSection('content'); ?>

    <h3 class="col-lg-2 col-md-4 mx-auto"><img src="assets/img/portfolio/logo.png" width="100" height="100"></h3>
    <br>
    <h6 class="col-lg-6 col-md-8 mx-auto ">Infinitum Cosamaloapan ahora cuenta con buzón de problemas o quejas para poder atender puntualmente cada una de las necesidades de nuestros clientes</h6>
    <br>
    <br>
    <br>
    <form method="post" action="<?php echo e(route('enviar.peticion')); ?>" class="col-lg-6 col-md-8 mx-auto">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control bg-light shadow-sm <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="name"
                   name="name" placeholder="Nombre..." autocomplete="off" value="<?php echo e(old('name')); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
           <strong><?php echo e($message); ?></strong>
           </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control bg-light shadow-sm <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email"
                   name="email" placeholder="Miejemplo@algo.com" autocomplete="off" value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
           <strong><?php echo e($message); ?></strong>
           </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>
        <br>

        <div class="form-group mb-3 ">
            <label for="subject" class="form-label">Dudas, quejas y aclaraciones</label>
            <textarea class="form-control bg-light shadow-sm <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="subject"
                      name="subject" placeholder="Queja.." autocomplete="off" value="<?php echo e(old('subject')); ?>"></textarea>
            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
           <strong><?php echo e($message); ?></strong>
           </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>
        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>




    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sitio.layaout.Atencion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Infinitum-main\resources\views/sitio/pages/chat.blade.php ENDPATH**/ ?>