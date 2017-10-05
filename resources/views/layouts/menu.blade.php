<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title"> Menú Carreras</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        @can('index_carreras')
        <li >
            <a href="{{ route('carreras.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Index carreras
                </span>
            </a>
        </li>
        @endcan

        @can('crear_carreras');
        <li>
            <a href="{{ route('carreras.create') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    crear
                </span>
            </a>
        </li>
        @endcan
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
        @can('index_entidades_federativas')
        <li >
            <a href="{{ route('entidadFederativas.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Listado de Entidades Federativas
                </span>
            </a>
        </li>
        @endcan

        @can('crea_entidades_federativas');
        <li>
            <a href="{{ route('entidadFederativas.create ') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Crar una entidad Federativa
                </span>
            </a>
        </li>
        @endcan
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
        @can('index_aspirantes_generales')
        <li >
            <a href="{{ route('aspiranteGenerals.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Listado de Aspirantes
                </span>
            </a>
        </li>
        @endcan

        @can('crea_aspirantes_generales');
        <li>
            <a href="{{ route('aspiranteGenerals.create ') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    Crar un aspirante en datos generales
                </span>
            </a>
        </li>
        @endcan
    </ul>
</li>


