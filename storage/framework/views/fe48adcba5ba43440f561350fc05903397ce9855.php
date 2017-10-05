<?php $request = app('Illuminate\Http\Request'); ?>

<?php $__env->startSection('title','Lista de habilidades'); ?>
<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">
           <i class="fa fa-list-alt" aria-hidden="true"></i> <strong><?php echo $__env->yieldContent('title'); ?></strong><a href="<?php echo e(route('admin.abilities.create')); ?>" class="btn btn-itslp pull-right"><?php echo app('translator')->getFromJson('global.app_add_new'); ?></a>
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($abilities) > 0 ? 'datatable' : ''); ?> dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th><?php echo app('translator')->getFromJson('global.abilities.fields.name'); ?></th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($abilities) > 0): ?>
                        <?php $__currentLoopData = $abilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ability): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($ability->id); ?>">
                                <td></td>
                                <td><?php echo e($ability->name); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.abilities.edit',[$ability->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.abilities.destroy', $ability->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.abilities.mass_destroy')); ?>';
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>