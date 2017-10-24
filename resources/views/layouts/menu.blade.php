<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title">Aspirantes Generales</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        @can('index_aspirantes_generales')
        <li >
            <a href="{{ route('aspiranteGenerals.index') }}">
                <i class="fa fa-list-ul"></i>
                <span class="title">
                    Lista
                </span>
            </a>
        </li>
        @endcan

        @can('crear_ aspirantes_generales');
        <li>
            <a href="{{ route('aspiranteGenerals.create') }}">
                <i class="fa fa-plus"></i>
                <span class="title">
                   Crear
                </span>
            </a>
        </li>
        @endcan

    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-map-marker"></i>
        <span class="title">Entidades Federativas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        @can('index_entidades_federativas')
        <li >
            <a href="{{ route('entidadFederativas.index') }}">
                <i class="fa fa-list-ul"></i>
                <span class="title">
                    Lista
                </span>
            </a>
        </li>
        @endcan

    </ul>
</li>

<li class="{{ Request::is('pais*') ? 'active' : '' }}">
    <a href="{!! route('pais.index') !!}">
        <i class="fa fa-map-marker"></i><span>Pais</span></a>
</li>

<li class="{{ Request::is('municipios*') ? 'active' : '' }}">
    <a href="{!! route('municipios.index') !!}">
        <i class="fa fa-map-marker"></i><span>Municipios</span></a>
</li>


<li class="{{ Request::is('organigramas*') ? 'active' : '' }}">
    <a href="{!! route('organigramas.index') !!}"><i class="fa fa-edit"></i><span>Organigramas</span></a>
</li>

<li class="{{ Request::is('carreras*') ? 'active' : '' }}">
    <a href="{!! route('carreras.index') !!}"><i class="fa fa-edit"></i><span>Carreras</span></a>
</li>


<li class="{{ Request::is('preparatoriaProcedencias*') ? 'active' : '' }}">
    <a href="{!! route('preparatoriaProcedencias.index') !!}"><i class="fa fa-edit"></i><span>PreparatoriaProcedencias</span></a>
</li>

<li class="{{ Request::is('carreraOfertadas*') ? 'active' : '' }}">
    <a href="{!! route('carreraOfertadas.index') !!}"><i class="fa fa-edit"></i><span>CarreraOfertadas</span></a>
</li>

<li class="{{ Request::is('configFechaInscripcions*') ? 'active' : '' }}">
    <a href="{!! route('configFechaInscripcions.index') !!}"><i class="fa fa-edit"></i><span>ConfigFechaInscripcions</span></a>
</li>

<li class="{{ Request::is('configFechaInscripcions*') ? 'active' : '' }}">
    <a href="{!! route('configFechaInscripcions.index') !!}"><i class="fa fa-edit"></i><span>ConfigFechaInscripcions</span></a>
</li>

<li class="{{ Request::is('configFechaInscripcions*') ? 'active' : '' }}">
    <a href="{!! route('configFechaInscripcions.index') !!}"><i class="fa fa-edit"></i><span>ConfigFechaInscripcions</span></a>
</li>
