<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Petopia</title>
	<link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
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
	<div class="capa">
		<div class="contenido">
			<h2 class="">Petopia</h2>
			<div class="texto">
				<h2>Bienvenido <br><span> a Petopia chamo</span></h2>

				<p>ksljaljflkjsdofalkjsdhfhllhskdfbalhdfbjahfbajkgafdg</p>

			</div>
			
		</div>
		<div class="logbox">
			<div class="login">
				<form action="">
					<h2>Iniciar Sesion</h2>

					<div class="inputbox">
						<span class="icon"><box-icon name='envelope'></box-icon></span>
						<input type="email" required>
						<label>Correo</label>
					</div>
					<div class="inputbox">
						<span class="icon"><box-icon name='lock' ></box-icon></i></span>
						<input type="password" required>
						<label>Contraseña</label>
					</div>
					<div class="recordar">
						<label><input type="checkbox">Recordar</label>
						<a href="">Recuperar contraseña</a>
					</div>
					<button type="submit" class="btn">Entrar</button>

					<div class="register">
						<p>¿No tienes  cuenta?</p><a href="" class="linkregistro">Registrarse</a>
					</div>
				</form>
			</div>
				
		</div>
	</div>
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