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
		@foreach ($datos as $item)
			
		
		<div class="item">
			<figure>
				<img src="{{$item->cover_img}}" alt="producto">
			</figure>
			<div class="info-producto">
				<h2>{{$item->nombre}}</h2>
				<p class="precio">{{$item->precio}}</p>
				<button>Añadir al carrito</button>
			</div>
		</div>

		@endforeach

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