<!DOCTYPE html>
<html lang="es">

<head>
    @include('partials.head')
</head>

<body class="page-header-fixed">
<header id="header"  class="container-fluid">
        <div class="topbar">
            <div class="container">
            	<div class="col-xs-2 col-sm-4 col-md-4 text-left">
		            <p class="textop text-left">
		                <a href="{{ url('/admin/home') }}" data-toggle="tooltip" data-placement="bottom" title="Inicio"><i class="fa fa-home"></i></a>
		            </p>
        		</div>
            </div>  
        </div>
        <div class="container">
            <div class="row cabitslp">
                <div class="col-xs-12 col-md-3">
                <div class="col-xs-6 col-md-12">
                    <img src="{{ url('img/sep.png') }}" alt="sep" width="100%" height="auto" />          
                </div>
                <div class="col-xs-6 text-right logoitslp2">
                    <img src="{{ url('img/logo-itslp.png') }}" alt="sep" width="30%" height="auto" />
                </div>
                    
                    
                </div>
                <div class="col-xs-12 col-md-8">
                    <h1 class="encabezado">
                        <strong>TECNOLÓGICO NACIONAL DE MÉXICO</strong>
                        INSTITUTO TECNOLÓGICO DE SAN LUIS POTOSÍ
                    </h1>
                </div>
                <div class="col-xs-2 col-md-1 logoitslp1">
                    <img src="{{ url('img/logo-itslp.png') }}" alt="sep" width="100%" height="auto" />
                </div>
            </div>
            <img src="{{ url('img/sombra.png') }}" width="100%" height="auto"/>
                <div class="textoheader"><h1>@yield('title')</h1></div>

        </div>
        </header>
        <!-- end header -->
    <div class="container-fluid">
        @yield('content')
    </div>

    <div class="scroll-to-top"
         style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')

</body>
</html>