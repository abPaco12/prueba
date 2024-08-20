<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">
	<meta name="KEYWORDS" content="">
	<title>tarea 1</title>
	<link rel="stylesheet" type="" href="../vista/assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon"  href="img/descarga.png">
</head>
<body class="bg-secondary">
	<section class="container rounded-2" style="background: transparent;">
		<main class="row">
			<?php
				if(isset($_POST['enviar'] ) && $_SERVER["REQUEST_METHOD"]=="POST"){
					$correo=$_POST['user'];
					$pass=$_POST['pass'];
					if(empty($correo) || empty($pass)){
						header('Location: ../../index.php? msg=' .urldecode('DEBE LLENAR TODOS LOS CAMPOS'));
					}  
					else if ($correo == 'chelitoquiroga@gmail.com' &&  $pass == 'sistemaNoche' || $correo == 'chelitosubsede@instituto.com'  && $pass == 'sistemaPenal123') 
					{
						header('Location: ../vista/public/resultado1.php');
					}
						else{ 
							header('Location: ../../index.php? msg2=' .urldecode('LOS DATOS SON INCORRECTOS'));
						}
					}
			?>
		</main>	
	</section>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>