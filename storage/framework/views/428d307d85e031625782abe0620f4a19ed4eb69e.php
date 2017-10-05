<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title"> Menú Carreras</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index_carreras')): ?>
        <li >
            <a href="<?php echo e(route('carreras.index')); ?>">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Index carreras
                </span>
            </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear_carreras')): ?>;
        <li>
            <a href="<?php echo e(route('carreras.create')); ?>">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    crear
                </span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title"> Menú Entidades Federativas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index_entidades_federativas')): ?>
        <li >
            <a href="<?php echo e(route('entidadFederativas.index')); ?>">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Listado de Entidades Federativas
                </span>
            </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crea_entidades_federativas')): ?>;
        <li>
            <a href="<?php echo e(route('entidadFederativas.create ')); ?>">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Crar una entidad Federativa
                </span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title"> Menú Aspirantes</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index_aspirantes_generales')): ?>
        <li >
            <a href="<?php echo e(route('aspiranteGenerals.index')); ?>">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Listado de Aspirantes
                </span>
            </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crea_aspirantes_generales')): ?>;
        <li>
            <a href="<?php echo e(route('aspiranteGenerals.create ')); ?>">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Crar un aspirante en datos generales
                </span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</li>


