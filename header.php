<header>
	<div class="logo">
		<a href="index.php"><img src="imgs/Logo.png"></a>
	</div>

			<div class="busqueda">
			<form>

						<img src="imgs/Lupa.png"><label>BUSCAR</label><input type="text" name="buscar">

			</form>
			</div>
				<a href="#"  target="_blank">
				<div class="candadito">
					<img src="imgs/Bolsa.png" alt="Bolsa">
					</div></a>
				<?php if(!array_key_exists('usuario', $_SESSION)):?>
				<div class="inicio">
				<a href="inicio.php"  target="_blank">LOG IN</a>
				</div><?php else:?>
				<div class="inicio">
				<a href="perfil.php"  target="_blank"><div class="avatar"><img src=<?= $usuario['imagen']?>></div></a>
				</div><?php endif; ?>
	</header>