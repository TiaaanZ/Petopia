<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Petopia</title>
	<link href="{{ asset('/css/prod.css') }}" rel="stylesheet">
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
			<div class="container-icon">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
				  </svg>			  
			</div>	
		</div>
		
	</header>


	<div class="container-items">
		<div class="item">
			<figure>
				<img src="https://images.unsplash.com/photo-1535294435445-d7249524ef2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>,Juguete para perro</h2>
				<p class="precio">$15000</p>
				<button>Añadir al carrito</button>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="https://m.media-amazon.com/images/I/61RA54u8dlL._AC_UF1000,1000_QL80_.jpg" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>Cama para gato</h2>
				<p class="precio">$50000</p>
				<button>Añadir al carrito</button>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="https://plus.unsplash.com/premium_photo-1692392181661-96c4b34759db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>Collar dorado para mascota</h2>
				<p class="precio">$25000</p>
				<button>Añadir al carrito</button>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="https://images.unsplash.com/photo-1535294435445-d7249524ef2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>Nose</h2>
				<p class="precio">80</p>
				<button>Añadir al carrito</button>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="https://images.unsplash.com/photo-1535294435445-d7249524ef2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>Nose</h2>
				<p class="precio">80</p>
				<button>Añadir al carrito</button>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="https://images.unsplash.com/photo-1535294435445-d7249524ef2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>Nose</h2>
				<p class="precio">80</p>
				<button>Añadir al carrito</button>
			</div>
		</div>
		<div class="item">
			<figure>
				<img src="https://images.unsplash.com/photo-1535294435445-d7249524ef2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>Nose</h2>
				<p class="precio">80</p>
				<button>Añadir al carrito</button>
			</div>
		</div>

	</div>


	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="perfil.blade.php">Perfil</a>
			<a href="adop.html">Adopciones</a>
			<a href="compras.html">Carrito de Compras</a>

		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<div></div>

</body>
</html>