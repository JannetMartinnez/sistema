<?php $__env->startSection('title','Editar usuario'); ?>
<?php $__env->startSection('content'); ?>
    
    <?php echo Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]); ?>


    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <a href="<?php echo e(route('admin.users.index')); ?>" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $__env->yieldContent('title'); ?></strong>
        </div>

        <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                    <?php echo Form::label('name', 'Nombre*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('name')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('name')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                    <?php echo Form::label('email', 'Email*', ['class' => 'control-label']); ?>

                    <?php echo Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('email')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('email')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                    <?php echo Form::label('password', 'Contraseña', ['class' => 'control-label']); ?>

                    <?php echo Form::password('password', ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('password')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('password')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                    <?php echo Form::label('roles', 'Roles*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('roles[]', $roles, old('roles') ? old('role') : $user->roles()->pluck('name', 'name'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('roles')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('roles')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12"><?php echo Form::submit(trans('global.app_update'), ['class' => 'btn btn-itslp']); ?></div>
            
        </div>
    </div>

    
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>