<html>

<head>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link rel="stylesheet" href="css/desktop.css">


	<meta charset="utf-8">

	<title>INGRESAR</title>

</head>

<body>
	<main>
	<?php  include ("header.php"); ?>	
	<?php  include ("nav.php"); ?>	
<cotent>
<div class="fondo">
	<form action="" class="container text-center">
		<div class="ingreso">
			<h3 class="text-center">INGRESAR</h3>
		</div>
		<div class="form-group col-sm-6">
			<label for="EMAIL">EMAIL
			<input type="Email" class="form-control" name="mail" required></label>
			</div>
		<div class="form-group col-sm-6">
			<label for="Pass">CONTRASEÑA
			<input type="password" class="form-control" name="Pass" ></label>
			<a href="#"><h6>OLVIDE MI CONTRASEÑA</h6></a>
		</div>					
			<p class="text-center">
			<button type="button">ACEPTAR</button>
			<button type="button">CANCELAR</button>
			</p>
			<h3 class="text-center">REGISTRARSE</h3>
		<a href="newacc.php">
		<div class="nuevacuenta">
				CREAR UNA CUENTA
		</div>
		</a>
				</form>
			</div>
	</content>

	<?php  include ("footer.php"); ?>
	<div class="clear">

	</div>
</main>
</body>

</html>
