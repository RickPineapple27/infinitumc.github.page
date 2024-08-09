<?php $__env->startSection('content'); ?>

    <h3 class="col-lg-2 col-md-4 mx-auto"><img src="assets/img/portfolio/infinitum.png" width="250" height="50"></h3>
    <br>
    <h6 class="col-lg-6 col-md-8 mx-auto "> Contratar ahora es más fácil, Infinitum Cosamaloapan te ofrece un formulario en el que puedes dejarnos tus datos para posteriormente comunicarnos contigo y así poder adquirir cualquier paquete que Infinitum tiene para ti</h6>
    <br>
    <br>
    <br>
    <form method="post" action="<?php echo e(route('details.sendEmail')); ?>"  class="col-lg-6 col-md-8 mx-auto">
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
            <small class="invalid-feedback" role="alert">
           <strong><?php echo e($message); ?></strong>
           </small>
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
               name="email" placeholder="Miejemplo@algo.com" autocomplete="on" value="<?php echo e(old('email')); ?>">
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

        <div class="form-group">
            <label for="tel">Tel (celular)</label>
            <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" class="form-control bg-light shadow-sm <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="phone"
                   name="telefono" placeholder="288..." autocomplete="off" value="<?php echo e(old('telefono')); ?>">
            <?php $__errorArgs = ['telefono'];
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
            <label for="subject">Direccion (Con entre calles)</label>
            <input class="form-control bg-light shadow-sm <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="address"
                   name="direccion" placeholder="Direccion" autocomplete="off" value="<?php echo e(old('direccion')); ?>">
            <?php $__errorArgs = ['direccion'];
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
            <label for="colonia">Colonia</label>
            <input class="form-control bg-light shadow-sm <?php $__errorArgs = ['colonia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="address"
                   name="colonia" placeholder="Direccion" autocomplete="off" value="<?php echo e(old('colonia')); ?>">
            <?php $__errorArgs = ['colonia'];
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
            <label for="referencia" class="form-label">Referencias</label>
            <textarea class="form-control bg-light shadow-sm <?php $__errorArgs = ['referencia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="referencia"
                   name="referencia" placeholder="Tienda, local de ropa, etc." autocomplete="off" value="<?php echo e(old('referencia')); ?>"></textarea>
            <?php $__errorArgs = ['referencia'];
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
            <label for="paquete">Paquetes</label>
            <select class="form-control bg-light shadow-sm <?php $__errorArgs = ['paquete'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="paquete"
                   name="paquete" placeholder="Paquetes de infinitum" autocomplete="off" value="<?php echo e(old('paquete')); ?>">

                <option selected>Selecciona un paquete de infinitum</option>

                <option value="Promocion-100mbps-telefonia+internet-$435">Promocion-100mbps-telefonia+internet-$435</option>
                <option value="Promocion-150mbps-telefonia+internet-$599">Promocion-150mbps-telefonia+internet-$599</option>
                <option value="Regular-50mbps-telefonia+internet-$389">Regular-50mbps-telefonia+internet-$389</option>
                <option value="Regular-50mbps-solo internet-$349">Regular-50mbps-solo internet-$349</option>
                <option value="Regular-100mbps-solo internet-$449">Regular-100mbps-solo internet-$449</option>


                <?php $__errorArgs = ['paquete'];
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
            </select>
        </div>



        <br>
        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>




    </form>

    <br><br>
    <br><br>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('sitio.layaout.contrataciones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Infinitum-main\resources\views/sitio/pages/contactanos.blade.php ENDPATH**/ ?>