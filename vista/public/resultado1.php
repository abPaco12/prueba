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
<body style="background-color: #9C4747;">
	<section class="container rounded-5" style="background:transparent;">
		<main class="row">
			<?php
				$nomP=$_GET["nomP"];
				$nomS=$_GET["nomS"];
				$ape=$_GET["apelliP"];
				$apeM=$_GET["apelliM"];
				$nombre = $_GET["nombre"];
    			$email = $_GET["email"];
    			$dire=$_GET["direc"];
    			$gene=$_GET["gen"];
    			$na=$_GET["nacio"];
    			$de=$_GET["depa"];
    			$car=$_GET["carrera"];
    			$tu=$_GET["tur"];
    			$gra=$_GET["grad"];
					?>
				<center>
					<p class="fw-bold fs-3 text-center" style="color: #448BFE ;">EL RESULTADO SE VISUALIZAR AQUI</p>			
					<div class="card" style="width:30rem;">
						
						<img src="../../f34.jpg" class="card-img-top" alt="...">
						<div class="card-body" style="background-color: #DC7E7E;">
							<p class="card-text fs-4 fw-bold text-white">PRIMER NOMBRE: <?php echo $nomP; ?></p>
							<p class="card-text fs-4 fw-bold text-white">SEGUNDO NOMBRE: <?php echo $nomS; ?></p>
							<p class="card-text fs-4 fw-bold text-white">APELLIDO PATERNO: <?php echo $ape; ?></p>
							<p class="card-text fs-4 fw-bold text-white">APELLIDO MATERNO: <?php echo $apeM; ?></p>		
							<p class="card-text fs-4 fw-bold text-white">EMAIL: <?php echo $nombre; ?></p>
							<p class="card-text fs-4 fw-bold text-white">CONTRASEÑA: <?php echo $email; ?></p>
							<p class="card-text fs-4 fw-bold text-white">DIRECCION: <?php echo $dire; ?></p>
							<p class="card-text fs-4 fw-bold text-white">GENERO: <?php echo $gene; ?></p>
							<p class="card-text fs-4 fw-bold text-white">NACIONALIDAD: <?php echo $na; ?></p>
							<p class="card-text fs-4 fw-bold text-white">DEPARTAMENTO: <?php echo $de; ?></p>
							<p class="card-text fs-4 fw-bold text-white">CARRERA: <?php echo $car; ?></p>
							<p class="card-text fs-4 fw-bold text-white">TURNO: <?php echo $tu; ?></p>
							<p class="card-text fs-4 fw-bold text-white">GRADO: <?php echo $gra; ?></p>
							<a href="../../index.php" class="btn btn-dark fs-4">IR AL FORMULARIO DE REGISTRO</a>
						</div>
					</div>
				</center>									 												
		</main>	
	</section>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>