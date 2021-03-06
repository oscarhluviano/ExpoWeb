<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CarCustom</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CarCustom</title>
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="admin.php">CarCustom</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="admin.php">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Accesorios.html">Acciones<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="delet.php">Borrar</a></li>
						<li><a href="add.php">Agregar</a></li>
						<li><a href="invadmin.php">Inventario</a></li>
						<li><a href="usuarios.php">Usuarios</a></li>
					</ul>
				</li>
				<li><a href="faqadmin.html">FAQ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="datos.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/gti 35.jpg" alt="CarCustom">
			</div>
			<div class="item">
				<img src="img/DSCN0477.jpg" alt="Performance">
			</div>
			<div class="item">
				<img src="img/catback.jpg" alt="Exhaust">
			</div>
			<div class="item">
				<img src="img/downpipe.jpg" alt="+HP">
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<ul class="nav navbar-nav">
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
		</ul>
		<p class="navbar-text">Proyecto creado por Oscar Hernández Luviano</p>
	</nav>
</body>
</html>