<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="{{ asset('/css/inven.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">  
        <div class="logo"> </div>
        <ul class="menu">
            <li class="active">
                <a href="#" class="active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span>Perfil</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-chart-bar"></i>
                    <span>Estadisiticas</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-question-circle"></i>
                    <span>FAQ</span>
                </a>
            </li>
            
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Configuracion</span>
                </a>
            </li>
            <li>
                <a href="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesion</span>
                </a>
            </li>
        
        </ul>
    </div>
    
	<!--	--------------->

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Principal</span>
                <h2>Dashboard</h2>
            </div>
                <div class="user--info">
                    <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Buscar">
                </div>
                <img src="img.jpg" alt="" >
            </div>
        </div>
		
	<!--	--------------->

		<div class="card--container">
			<h3 class="main--title">Data</h3>
			<div class="card--wrapper">
				
	<!--	--------------->

				<div class="payment--card light-blue">
					<div class="card--header">
						<div class="amount">
							<span class="title">Payment amount</span>
							<span class="amount--value">$500.00</span>
						</div>
						<i class="fas fa-dollar-sign icon"></i>
					</div>
					<span class="card-detail">**** **** **** 2345</span>
				</div>

	<!--	--------------->

				<div class="payment--card light-purple">
					<div class="card--header">
						<div class="amount">
							<span class="title">Payment Order</span>
							<span class="amount--value">$200.00</span>
						</div>
						<i class="fas fa-list icon dark-purple"></i>
					</div>
					<span class="card-detail">**** **** **** 1234</span>
				</div>

	<!--	--------------->

				<div class="payment--card light-purple">
					<div class="card--header">
						<div class="amount">
							<span class="title">Total de productos</span>
							<span class="amount--value"> 30 </span>
						</div>
						<i class="fas fa-list icon dark-purple"></i>
					</div>
					<span class="card-detail">Productos para mascotas</span>
				</div>

	<!--	--------------->

				<div class="payment--card light-purple">
					<div class="card--header">
						<div class="amount">
							<span class="title">Mascotas en adopcion</span>
							<span class="amount--value">10</span>
						</div>
						<i class="fas fa-list icon dark-purple"></i>
					</div>
					<span class="card-detail">Cantidad de mascotas </span>
				</div>


			</div>
		</div>
    </div>
</body>
</html>