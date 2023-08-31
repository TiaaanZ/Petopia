<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Petopia</title>
	<link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Petopia</h1>
			</div>
			<nav class="menu">
				<a href="inicio.blade">Inicio</a>
				<a href="info.html">Nosotros</a>
				<a href="inicio/contacto">Contacto</a>
				<a href="inicio/registro">Registrar</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="perfil.blade.php">Perfil</a>
			<a href="inicio/productos">Productos</a>
			<a href="adop.html">Adopciones</a>
			<a href="compras.html">Carrito de Compras</a>

		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<div></div>

</body>
</html>