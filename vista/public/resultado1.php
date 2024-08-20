<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">
	<meta name="KEYWORDS" content="">
	<title>tarea 1</title>
	<link rel="stylesheet" type="" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon"  href="img/descarga.png">
</head>
<style>
	p{
		text-align: left;
	}
</style>
<body class="bg-secondary">
	<section class="container rounded-5" style="background:transparent;">
		<main class="row">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  							<h3 class="navbar-brand fw-bold" href="#">INICIO</h3>
  								<div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../index2.php">REGISTRO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../index.php">SALIR</a>
                                        </li>
                                    </ul>
                                </div>
                        </nav>
			<?php
				$nombre = $_GET["nombre"];
    			$email = $_GET["email"];
					?>
				<center>			
					<div class="card-body" style="width:30rem;">
						
						<img src="../../f34.jpg" class="card-img-top" alt="...">
						<div class="card-body" style="background-color: grey;">	
							<p class="card-text fs-4 fw-bold text-white">EMAIL: <?php echo $nombre; ?></p>
							<p class="card-text fs-4 fw-bold text-white">CONTRASEÑA: <?php echo $email; ?></p>
							<a href="../../index2.php" class="btn btn-dark fs-4">IR AL FORMULARIO DE REGISTRO</a>
						</div>
					</div>
				</center>									 												
		</main>	
	</section>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>