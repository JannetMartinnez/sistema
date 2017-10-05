<?php $__env->startSection('title','Inicio'); ?>
<?php $__env->startSection('content'); ?>
<header id="header"  class="container-fluid">
        <div class="container">
            <div class="row cabitslp">
                <div class="col-xs-12 col-md-3">
                <div class="col-xs-6 col-md-12">
                    <img src="<?php echo e(url('img/sep.png')); ?>" alt="sep" width="100%" height="auto" />          
                </div>
                <div class="col-xs-6 text-right logoitslp2">
                    <img src="<?php echo e(url('img/logo-itslp.png')); ?>" alt="sep" width="30%" height="auto" />
                </div>
                    
                    
                </div>
                <div class="col-xs-12 col-md-8">
                    <h1 class="encabezado">
                        <strong>TECNOLÓGICO NACIONAL DE MÉXICO</strong>
                        INSTITUTO TECNOLÓGICO DE SAN LUIS POTOSÍ
                    </h1>
                </div>
                <div class="col-xs-2 col-md-1 logoitslp1">
                    <img src="<?php echo e(url('img/logo-itslp.png')); ?>" alt="sep" width="100%" height="auto" />
                </div>
            </div>
            <img src="<?php echo e(url('img/sombra.png')); ?>" width="100%" height="auto"/>
                <div class="textoheader"></div>

        </div>
        </header>
        <!-- end header -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>