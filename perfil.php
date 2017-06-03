<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perfil</title>
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="home.html">CarCustom</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="home.html">Home</a></li>
					<li><a href="inventario.php">Inventario</a></li>
					<li><a href="faq.html">FAQ</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="datos.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="well well-sm">
						<div class="row">
							<div class="col-sm-6 col-md-8">
								<h4>
								Bhaumik Patel</h4>
								<small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
								</i></cite></small>
								<p>
									<i class="glyphicon glyphicon-envelope"></i>email@example.com
									<br />
									<i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
									<br />
								<i class="glyphicon glyphicon-gift"><?php echo .$_POST['correo']; ?></i>
								</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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