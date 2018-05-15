<?php
include('funciones.php');

	session_start();

	if (existeParametro('usuario',$_SESSION)) {
		header("Location: index.php");
		exit;
	}

	$email = valorParametro('email',$_POST);
	$password = valorParametro('password',$_POST);
	$infoUsuario = [];
	$error = false;
	$passwordError = false;

	if (existeParametro('submit', $_POST)) {
		if($email && $password) {
			$infoUsuario = infoUsuario($email);
			if ($infoUsuario['existe']) {
				if (password_verify($password, $infoUsuario['usuario']['password'] )) {
					$_SESSION['usuario'] = $infoUsuario['usuario'];
					if (existeParametro('recordarusuario', $_POST)) {
						setcookie('email',$email);
					} else {
						setcookie('email',$email, time()-3600);
					}
					header("Location: perfil.php");
					exit;
				} else {
					$error = true;
					$passwordError = true;
				}
			} else {
				$error = true;
			}
		} else {
			$error = true;
		}
	}

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

	<title>INGRESAR</title>

</head>

<body>
	<main>
	<?php  include ("header.php"); ?>	
	<?php  include ("nav.php"); ?>	
<cotent>
<div class="fondo">
	<form action="" class="container text-center" method="post">
		<h2 font = "" >Iniciar Sesion</h2>
            <?php if($error && array_key_exists('existe', $infoUsuario) && !$infoUsuario['existe']): ?>
              <span><i></i> Usuario no registrado</span>
            <?php endif; ?>
            <?php if($error && $passwordError): ?>
              <span><i></i> Contraseña incorrecta</span>
            <?php endif; ?>
            <?php if($error && !$email):?>
      				<span> <i></i> Ingresar un email</span>
      			<?php endif; ?>
            <input type="email" name="email" value="<?= existeParametro('email', $_COOKIE) ? valorParametro('email', $_COOKIE) : $email ?>" class="<?= ($error && !$email) ? 'error':null ?>" placeholder="Email">
            <?php if($error && !$password):?>
      				<span><i></i> Ingresar una contraseña</span>
      			<?php endif; ?>
            <input type="password" name="password" value="" class="<?= ($error && !$password) ? 'error':null ?>"  placeholder="Contraseña">
						<label for="recordarusuario"><input type="checkbox" name="recordarusuario" value="recordar" <?= existeParametro('email', $_COOKIE) ? 'checked' : null ?>><span class="ref">Recordar usuario</span></label>
            <p class="text-center">
			<button type="submit" name="submit">ACEPTAR</button>
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
