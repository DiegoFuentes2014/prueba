<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MTB - Cachapoal</title>

	<!--Bootstrap-->
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.min.css">
	<!--Estilo-->
	<link rel="stylesheet"  href="css/estilo.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>

	<!-- Normalize css -->
	<link rel="stylesheet"  href="css/normalize.css">
</head>
<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<center><a href="index.php"><img src="img/logo.png"></a></center>
				</div>
				<div class="hidden-xs col-sm-6 col-md-9 col-lg-9">
					<h1>MTB Cachapoal</h1>
				</div>
			</div>
		</div>
	</header>
	<!--Menu-->
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Cambair navegacion</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">MTB-Cachapoal</a>	
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="">Quienes Somos</a></li>
				<li><a href="">Organigrama</a></li>
				<li><a href="">Galeria de Imagenes</a></li>
				<li><a href="">Calendario MTB</a></li>
				<li><a href="">Sponsor</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Interes<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="">Interes 1</a></li>
						<li><a href="">interes 2</a></li>
						<li><a href="">Interes 3</a></li>
					</ul>
				</li>
				<li><a href="#">Contacto</a></li>
			</ul>

			<form class="navbar-form navbar-right hidden-xs hidden-sm hidden-md">
				<div class="form-group">
					<input type="text" class="form-control">
				</div>
				<button type="submit" class="btn btn-default">Buscar</button>
			</form>
		</div>
	</nav>			



	<div class="full-slider">
			<!-- slider -->
		<section id="MiSlider" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#MiSlider" data-slide-to="0" class="active"></li>
				<li data-target="#MiSlider" data-slide-to="1"></li>
				<li data-target="#MiSlider" data-slide-to="2"></li>
				<li data-target="#MiSlider" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active"><img src="img/img1.jpg" class="adaptar"></div>
				<div class="item"><img src="img/img2.jpg" class="adaptar"></div>
				<div class="item"><img src="img/img3.jpg" class="adaptar"></div>
				<div class="item"><img src="img/img4.jpg" class="adaptar"></div>
			</div> 
			<!--Felchas Slider -->
			<a href="#MiSlider" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a href="#MiSlider" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</section>
	</div>

	<div class="container social">		
		<section>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-6 col-lg-6">
							<br><br><center><img src="img/rueda5.png" class="img-responsive"></center><br>
						</div>
						<div class="hidden-xs col-sm-9 col-md-6 col-lg-6">
							<h3>Facebook</h3>
							<p align="justify">
								Te invitamos a ser parte de nuestra red social para que puedas estar conectado 
								junto a MTB Cachapoal en la cual podras visualizar informacion dia a dia y fotos.
							<br>
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-6 col-lg-6">
							<br><br><center><img src="img/rueda7.png" class="img-responsive"></center><br>
						</div>
						<div class="hidden-xs col-sm-9 col-md-6 col-lg-6">
							<h3>Twitter</h3>
							<p align="justify">
								En nuestra red de Twitter podras informarte de nuestras noticias mas importantes
								en las cuales tu opinion es importante para nuestro grupo MTB.
							<br>
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-6 col-lg-6">
							<br><br><center><img src="img/rueda5.png" class="img-responsive"></center><br>
						</div>
						<div class="hidden-xs col-sm-9 col-md-6 col-lg-6">
							<h3>Auspicio</h3>
							<p align="justify">
								Esto es un posible espacio para un auspiciador o lo que sea
							<br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<br>
	<footer>
		<div class="container foo">
			<div class="row">
				<div class="col-lg-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="col-lg-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="col-lg-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
