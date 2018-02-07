
@can('config_escolares')
<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title">Config. Sis.</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
		<li class="{{ Request::is('configFechaInscripcions*') ? 'active' : '' }}">
		    <a href="{!! route('configFechaInscripcions.index') !!}"><i class="fa fa-edit"></i><span>ConfigFechaInscripcions</span></a>
		</li>

		<li class="{{ Request::is('periodoEscolars*') ? 'active' : '' }}">
		    <a href="{!! route('periodoEscolars.index') !!}"><i class="fa fa-edit"></i><span>PeriodoEscolars</span></a>
		</li>
    </ul>
</li>
@endcan
@can('mnto_catalogos')
<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span class="title">Mnto Catálogos</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
		        
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

		<li class="{{ Request::is('nivelEstudios*') ? 'active' : '' }}">
		    <a href="{!! route('nivelEstudios.index') !!}"><i class="fa fa-edit"></i><span>NivelEstudios</span></a>
		</li>

		<li class="{{ Request::is('deQuienDependes*') ? 'active' : '' }}">
		    <a href="{!! route('deQuienDependes.index') !!}"><i class="fa fa-edit"></i><span>DeQuienDependes</span></a>
		</li>

		<li class="{{ Request::is('quienVivesActuals*') ? 'active' : '' }}">
		    <a href="{!! route('quienVivesActuals.index') !!}"><i class="fa fa-edit"></i><span>QuienVivesActuals</span></a>
		</li>

		<li class="{{ Request::is('casaVives*') ? 'active' : '' }}">
		    <a href="{!! route('casaVives.index') !!}"><i class="fa fa-edit"></i><span>CasaVives</span></a>
		</li>

		<li class="{{ Request::is('ocupacionPadres*') ? 'active' : '' }}">
		    <a href="{!! route('ocupacionPadres.index') !!}"><i class="fa fa-edit"></i><span>OcupacionPadres</span></a>
		</li>

		<li class="{{ Request::is('estadoUnionPadres*') ? 'active' : '' }}">
		    <a href="{!! route('estadoUnionPadres.index') !!}"><i class="fa fa-edit"></i><span>EstadoUnionPadres</span></a>
		</li>

		<li class="{{ Request::is('estudioPadres*') ? 'active' : '' }}">
		    <a href="{!! route('estudioPadres.index') !!}"><i class="fa fa-edit"></i><span>EstudioPadres</span></a>
		</li>

		<li class="{{ Request::is('aspiranteSocioecomicos*') ? 'active' : '' }}">
		    <a href="{!! route('aspiranteSocioecomicos.index') !!}"><i class="fa fa-edit"></i><span>AspiranteSocioecomicos</span></a>
		</li>

		<li class="{{ Request::is('numerosPalabras*') ? 'active' : '' }}">
		    <a href="{!! route('numerosPalabras.index') !!}"><i class="fa fa-edit"></i><span>NumerosPalabras</span></a>
		</li>

		<li class="{{ Request::is('estadoCivils*') ? 'active' : '' }}">
		    <a href="{!! route('estadoCivils.index') !!}"><i class="fa fa-edit"></i><span>EstadoCivils</span></a>
		</li>


		<li class="{{ Request::is('zonaProcedencias*') ? 'active' : '' }}">
		    <a href="{!! route('zonaProcedencias.index') !!}"><i class="fa fa-edit"></i><span>ZonaProcedencias</span></a>
		</li>

		<li class="{{ Request::is('estadoCivils*') ? 'active' : '' }}">
		    <a href="{!! route('estadoCivils.index') !!}"><i class="fa fa-edit"></i><span>EstadoCivils</span></a>
		</li>

		<li class="{{ Request::is('zonaProcedencias*') ? 'active' : '' }}">
		    <a href="{!! route('zonaProcedencias.index') !!}"><i class="fa fa-edit"></i><span>ZonaProcedencias</span></a>
		</li>

		<li class="{{ Request::is('aspiranteSaluds*') ? 'active' : '' }}">
		    <a href="{!! route('aspiranteSaluds.index') !!}"><i class="fa fa-edit"></i><span>AspiranteSaluds</span></a>
		</li>

		<li class="{{ Request::is('tipoModalidads*') ? 'active' : '' }}">
		    <a href="{!! route('tipoModalidads.index') !!}"><i class="fa fa-edit"></i><span>TipoModalidads</span></a>
		</li>

		<li class="{{ Request::is('configFechaInscripcions*') ? 'active' : '' }}">
		    <a href="{!! route('configFechaInscripcions.index') !!}"><i class="fa fa-edit"></i><span>ConfigFechaInscripcions</span></a>
		</li>

		<li class="{{ Request::is('periodoEscolars*') ? 'active' : '' }}">
		    <a href="{!! route('periodoEscolars.index') !!}"><i class="fa fa-edit"></i><span>PeriodoEscolars</span></a>
		</li>
    </ul>
</li>

@endcan
