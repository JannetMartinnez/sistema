<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title"> Menú Carreras</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('index_carrera')): ?>
        <li >
            <a href="<?php echo e(route('carreras.index')); ?>">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Index carreras
                </span>
            </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear_carrera')): ?>;
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



<li class="<?php echo e(Request::is('alumnos*') ? 'active' : ''); ?>">
    <a href="<?php echo route('alumnos.index'); ?>"><i class="fa fa-edit"></i><span>Alumnos</span></a>
</li>
<li class="<?php echo e(Request::is('alumnoMaterias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('alumnoMaterias.index'); ?>"><i class="fa fa-edit"></i><span>AlumnoMaterias</span></a>
</li>

<li class="<?php echo e(Request::is('alumnoMaterias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('alumnoMaterias.index'); ?>"><i class="fa fa-edit"></i><span>AlumnoMaterias</span></a>
</li>

<li class="<?php echo e(Request::is('materias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('materias.index'); ?>"><i class="fa fa-edit"></i><span>Materias</span></a>
</li>

<li class="<?php echo e(Request::is('alumnos*') ? 'active' : ''); ?>">
    <a href="<?php echo route('alumnos.index'); ?>"><i class="fa fa-edit"></i><span>Alumnos</span></a>
</li>

