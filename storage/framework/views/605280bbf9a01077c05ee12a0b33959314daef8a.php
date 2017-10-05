<?php $__env->startSection('title','Editar habilidad'); ?>
<?php $__env->startSection('content'); ?>
    <h3 class="page-title"></h3>
    
    <?php echo Form::model($ability, ['method' => 'PUT', 'route' => ['admin.abilities.update', $ability->id]]); ?>


    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <a href="<?php echo e(route('admin.abilities.index')); ?>" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $__env->yieldContent('title'); ?></strong>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('name', 'Nombre*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('name')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('name')); ?>

                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12"><?php echo Form::submit(trans('global.app_update'), ['class' => 'btn btn-itslp']); ?></div>
            </div>
            
        </div>
    </div>

    
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>