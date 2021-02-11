<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Menu multinivel responsive</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	

	
</head>
<body>
	<header>
		<span id="button-menu" class="fa fa-bars"></span>

		<nav class="navegacion">
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu">Menú</li>
				<!-- TITULAR -->

				<li><a href="http://alexisweb.epizy.com/"><span class="fa fa-home icon-menu"></span>Inicio</a></li>

				<li class="item-submenu" menu="1">
					<a href="#"><span class="fa fa-suitcase icon-menu"></span>Servicios</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-suitcase icon-menu"></span>Servicios</li>
						<li class="go-back">Atras</li>

						<li><a href="#">Diseño web</a></li>
						<li><a href="#">Desarrollo de aplicativos</a></li>
						<li><a href="#">Desarrollo de Software</a></li>
					</ul>
				</li>

				<li class="item-submenu" menu="2">
					<a href="#"><span class="fa fa-android icon-menu"></span>Sección Pruebas</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-android icon-menu"></span>Sección Pruebas</li>
						<li class="go-back">Atras</li>

						<li class="item-subsubmenu" ><a href="seccion-pruebas/minijuegos/">Mini Juegos</a></li>
						
						
					</ul>
				</li>

				<li><a href="contacto/"><span class="fa fa-envelope icon-menu"></span>Contacto</a></li>
				<li><a href="#"><span class="fa fa-tag icon-menu"></span>Blog</a></li>
			</ul>
		</nav>
	</header>
	
</body>
</html>