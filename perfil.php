<?php
include('funciones.php');

	session_start();

	if (!existeParametro('usuario',$_SESSION)) {
		header("Location: inicio.php");
		exit;
	}

	$usuario = $_SESSION['usuario'];

?>


<html>

<head>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link rel="stylesheet" href="css/desktop.css">


	<meta charset="utf-8">

	<title>Bienvenido <?= $usuario['nombre'] ?></title>

</head>

<body>
	<main>
	<?php  include ("header.php"); ?>	
	<?php  include ("nav.php"); ?>	
<cotent>
<div class="fondo">
	<form action="" class="container text-center">
            
            </i><h2>Bienvenido <?= $usuario['nombre'] ?></h2></span>      			
            <p class="text-center">
            <div class="avatar"><img src=<?= $usuario['imagen']?>>
            <div class="datos">
            <p>Nombre y Apellido:<br> <?= $usuario['nombre'] ?></p>
            <p>Email:<br> <?= $usuario['email'] ?></p>

			<a href="index.php">
				<div class="nuevacuenta">
				HOME
				</div>
			</a>
			<a href="inicio.php">
				<div class="nuevacuenta">
					LOG OUT
				</div>
				</a>
          </form>				
			
			</div>
	</content>

</main>
</body>

</html>
