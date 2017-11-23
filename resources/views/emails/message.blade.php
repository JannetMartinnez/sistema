<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Actionable emails e.g. reset password</title>
<style type="text/css">
table.stilotabla{
		width:900px;
		margin:20px auto;
		border:none;
	}
	p{
		font-size: 14px;
		color: #222222;
	}
	a{
		color:#7d222b;
		text-decoration: underline;
	}
	a:hover{color: #222222;}
</style>
</head>

<body itemscope itemtype="http://schema.org/EmailMessage">
	<table width="900" border="0" class="stilotabla" align="center" style="margin:20px auto;">
		<tr>
			<td>&nbsp;</td>
			<td>
				<img src="{{ url('img/itslp.jpg') }}" alt="sep" width="100%" align="center" height="auto" />
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<h4>Le damos la más cordial bienvendida al Sistemaa de Registro del ITSLP</h4>
				<p>Por éste medio recibe usted el usuario y contraseña que le permitirán ingresar al sistema donde podrá continuar con los tramites de solicitud de inscripción.</p>
				<p>&nbsp;</p>
				<p>
					<strong>Usuario:</strong> {{$email}}<br/>
					<strong>Contraseña:</strong> {{$password}}
				</p>
				<p>&nbsp;</p>
				<p>Para ingresar a la página de inscripción acceda a la siguiente dirección:</p>
				<p><a href="http://localhost/itslp/public/login"><em>http://localhost/itslp/public/login</em></a></p>
				<p>&nbsp;</p>
				<p>Recuerde que el proceso de inscripción abarca 12 pasos, mismos que le invitamos a revisar en la siguiente dirección:</p>
				<p><a href="http://www.itslp.edu.mx/index.php/aspirantes/educacion-presencial/proceso-de-admision"><em>http://www.itslp.edu.mx/index.php/aspirantes/educacion-presencial/proceso-de-admision</em></a></p>
				<p>&nbsp;</p>
				<p><strong>Atentamente: Dpto. de Servicios Escolares ITSLP</strong></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</body>
</html>
