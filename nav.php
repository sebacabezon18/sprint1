<nav>
		<ul>
				<li><a href="#">HOME</a></li><li><a href="#"  target="_blank">SALE</a></li><?php if(!array_key_exists('usuario', $_SESSION)):?><li><a href="newacc.php"  target="_blank">SIGN UP</a></li><li><a href="inicio.php"  target="_blank">LOGIN</a></li><?php else:?><li><a href="perfil.php"  target="_blank">PERFIL</a></li><li><a href="logout.php"  target="_blank">LOG OUT</a></li>
				<?php endif; ?>
		</ul>
		</nav>