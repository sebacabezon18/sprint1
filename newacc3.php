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
<content>
<div class="fondo">
	<form action="" class="container text-center" method="POST" enctype="multipart/form-data" >
		<div class="ingreso">
				<h3 class="text-center">CREAR CUENTA</h3>
		</div>
		<div class="form-group col-sm-6">
			<?php if($error && array_key_exists('existe', $infoUsuario) && $infoUsuario['existe']): ?>
              <span><i></i>Ya existe un usuario con ese E-mail</span>
            <?php endif; ?>
            <?php if($error && !$nombre):?>
      				<span><i></i> Ingresar un nombre y apellido</span>
      			<?php endif; ?>
      		<?php if($error && strlen($nombre) < 10):?>
      				<span><i></i>El Nombre y Apellido es demasiado corto</span>
      			<?php endif; ?>
			<label>NOMBRE Y APELLIDO<input type="text" class="form-control" name="nombre" required></label>
			</div>
		<div class="form-group col-sm-6">
			<?php if($error && !$email):?>
      				<span> <i></i> Ingresar un email</span>
      			<?php endif; ?>
			<label>EMAIL<input type="Email" class="form-control" name="email" required></label>
		</div>
		<div class="form-group col-sm-6">
			<?php if($error && !$password):?>
      				<span><i></i>Ingresar una contraseña</span>
      			<?php endif; ?>
			<label>PASSWORD<input name="password" type="password" class="form-control" required></label>
		</div>
		<div class="form-group col-sm-6">
			<?php if($error && !$password2):?>
      				<span><i></i></span>
      			<?php endif; ?>
      		<?php if($error && ($password2 || $password)):?>
      				<span><i></i>Las contraseñas deben ser iguales</span>
      			<?php endif; ?>
			<label>PASSWORD CONFIRM<input name="password2" type="password" class="form-control" required>
			</label>
		</div>
		<div class="form-group">
					<label>Foto</label>
					<div>
						<?php if($error && !$existeFile):?>
      					<span><i></i>Ingresar una imagen de perfil</span>
      			<?php endif; ?>
						<input type="file" name="imagen">
					</div>
				</div>
		<p class="text-center">
			<button type="submit" name="submit">ACEPTAR</button>
			<button type="reset">CANCELAR</button>
		</p>
	<a href="#">
	<div class="nuevacuenta">
		ACEPTAR BASES Y CONDICIONES
	</div></a>
	<a href="inicio.php">
	<div class="nuevacuenta">
		INICIAR SESION
	</div></a>
	 </form>
			</div>
	</content>

	<?php  include ("footer.php"); ?>
	<div class="clear">

	</div>
</main>
</body>

</html>
