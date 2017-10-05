<?php $__env->startSection('title','Restablecer la contraseña'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xs-10 col-sm-8 col-md-4 col-lg-4  col-xs-offset-1  col-sm-offset-2 col-md-offset-4 col-lg-offset-4 divlogin">

                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
                            <br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="<?php echo e(url('password/email')); ?>">
                        <input type="hidden"
                               name="_token"
                               value="<?php echo e(csrf_token()); ?>">

                         <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="Correo electrónico" 
                                       value="<?php echo e(old('email')); ?>">
                            </div>
                            <div style="clear:both;">&nbsp;</div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit"
                                        class="btn btn-itslp"
                                        style="margin-right: 15px;">
                                    <?php echo app('translator')->getFromJson('global.app_reset_password'); ?>
                                </button>
                            </div>
                        </div>
                    </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>