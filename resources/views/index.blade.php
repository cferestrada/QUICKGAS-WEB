
<!DOCTYPE html>
 <html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/login.css">
		<script src="js/modernizr-2.6.2.min.js"></script>

		<style>
			body{
				background-position: center center;
				background-image: url(images/nieto.jpeg);
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				background-color: #464646;
			}
			@media only screen and (max-width: 767px) {
				body{
					 background-position: center center;
				background-image: url(images/log.jpeg);
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				background-color: orange;
					 }
			}
		</style>
	</head>

	<body>
	<header role="banner" id="fh5co-header"></header>

	<section id="fh5co-home" data-section="home" style="background-color: transparent;" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap to-animate">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-6">
							<h1>Inicia Sesion</h1>
							<div class="call-to-action">
								<form role="form" action="" method="POST">
								  <div class="form-group ">
								    <label for="Usuario">Email</label>
								    <input type="email" class="form-control" name="Usuario" id="Usuario" required 
								           placeholder="Introduce tu email">
								  </div>
								  <div class="form-group ">
								    <label for="Contrasenia">Contraseña</label>
								    <input type="password" class="form-control" name="Contrasenia" id="Contrasenia" 
								           placeholder="Contraseña">
								  </div>

								  <input class="btn btn-lg" style="background-color: #46143c;" type="submit" value="Aceptar">

								</form>
								  <a href="Reestablecer.php">Olvide Mi Contraseña</a>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/google_map.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>


