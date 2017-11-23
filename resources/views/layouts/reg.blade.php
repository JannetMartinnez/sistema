<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.head')
</head>
<body class="">
  <header id="header"  class="container-fluid">
		<div class="container">
			<div class="row cabitslp">
				<div class="col-xs-12 col-md-3">
				<div class="col-xs-6 col-md-12">
					<img src="img/sep.png" alt="sep" width="100%" height="auto" />
				</div>
				<div class="col-xs-6 text-right logoitslp2">
					<img src="img/logo-itslp.png" alt="sep" width="30%" height="auto" />
				</div>
				</div>
				<div class="col-xs-12 col-md-8">
					<h1 class="encabezado">
						<strong>TECNOLÓGICO NACIONAL DE MÉXICO</strong>
						INSTITUTO TECNOLÓGICO DE SAN LUIS POTOSÍ
					</h1>
				</div>
				<div class="col-xs-2 col-md-1 logoitslp1">
					<img src="img/logo-itslp.png" alt="sep" width="100%" height="auto" />
				</div>
			</div>

    	</div>
		</header>
  <section  class="container">
      @yield('content')
  </section>
  <footer class="container-fluid">
    <div class="container">
      <div class="row logo_footer">
        <img src="img/logo_footer.png" alt="logo footer" width="201" height="auto" border="0" />
      </div>
      <p style="text-align: center;">Av. Tecnológico, S/N Col UPA <br />Soledad de Graciano Sánchez, México 78437<br />TEL:(444) 818 21 36<br />FAX:(444) 818 31 31<br /><br />Copyright © 2015 Instituto Tecnológico de San Luis Potosí. Algunos derechos reservados.<br /><br /></p>
    </div>
  </footer>

@include('partials.javascripts')
</body>
</html>
