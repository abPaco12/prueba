
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

<body class="bg-secondary">
	<section class="container rounded-2" style="background: transparent;">
		<main class="row">
			<?php
								if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){
									$correo=$_POST['user'];
									$pass=$_POST['pass'];
									if(empty($correo) || empty($pass)){
										header('Location: index.php? msg=' .urldecode('DEBE LLENAR TODOS LOS CAMPOS'));
									}  
									else if ($correo != 'marco@gmail.com' || $pass != 123456789) {
										header('Location: index.php? msg2=' .urldecode('LOS DATOS SON INCORRECTOS'));
										// code...
									}else{ ?>
										<p class="lead fw-bold text-success">EL RESULTADO SE VISUALIZAR AQUI:</p>
										<div class="card" style="width:20rem;">
											<img src="foto.png" class="card-img-top" alt="...">
											<div class="card-body">
												<h5 class="card-title"> EMAIL: <?php echo $correo; ?></h5>
												<p class="card-text fw-bold">CONTRASEÑA: <?php echo $pass; ?></p>
												<a href="#" class="btn btn-primary">IR AL FORMULARIO DE REGISTRO</a>
											</div>
										</div>
									<?php	}
								}
							?>
							</main>
	</section>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>