<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<script src="http://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
	<title></title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<style>
		@import url('http://fonts.googleapis.com/css2?family=Poppins&display=swap');
	body{
		top: 50%;
		width: 100%;
		height: 100vh; 
		
		background-image: url('../../p8.jpg');
		background-position: center;
		background-size: cover;
		/*filter: blur(5px);*/
	}
		/*body{
	position: absolute;
	top: 50%;
	left: 50%;
	width: 75%;
	height: 15%;
	transform: translate(-50%,-50%);
	background-image: url('../../p8.jpg');
	background-position: center;
	background-size: cover;
	display: flex;
	margin-top: 10px;
	border: 1px solid black;
	border-radius: 10px;
	border: none;
	box-shadow: 5px 10px 10px 0;
}*/
table{
	border-collapse: collapse;
	width: 100%;
 /*border: 1px solid #ddd;*/
}

th,td{
	padding: 8px;
	text-align: left;
	border-bottom: 1px solid #ddd;

}
tr:nth-child(odd){

	}
th{
	
	color: white;
}
	</style>

</head>
<body >
	<section class="container bg-info rounded-5">
		<h2 class="text-danger fw-bold text-center display-6">TAREA 4</h2>
		
		<?php
				if(isset($_POST['enviar'] ) && $_SERVER["REQUEST_METHOD"]=="POST"){
					$nombre = $_POST["nombre"];
	    			$edad = $_POST["edad"];
	    			$ci=$_POST["cedula"];
	    			$celular=$_POST["celular"];
	    			$correo = $_POST["correo"];
    				$contrasena = $_POST["contraseña"];
    				$turno=$_POST["turno"];
    				$carrera=$_POST["carrera"];

	    			if(empty($nombre) || empty($edad) || empty($ci) || empty($celular) || empty($correo) || empty($contrasena) || empty($turno) || empty($carrera)){
						header('Location: ../../index1.php?msg=' .urldecode('DEBE LLENAR EL CAMPO CON UN DATO VALIDO'));	
					}
					$regexCedula = '/^\d{7}\s(?:LP|SC|CB|OR|PT|TJ|CH|BE|PA|NA|PO|SA|EX)$/i';
    				$regexCelular = '/^(6|7|8)\d{7}$/';
    
    				if (preg_match($regexCedula, $ci) && preg_match($regexCelular, $celular) && $edad >= 19 && $edad <= 69 &&)?> {
        				<table class="container bg-primary rounded-5" >
							<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">NOMBRE</th>
					<th scope="col">APELLIDOS</th>
					<th scope="col">EDAD</th>
					<th scope="col">CEDULA DE IDENTIDA</th>
					<th scope="col">CARRERA</th>
					<th scope="col">TURNO</th>
					<th scope="col">CORREO</th>
					<th scope="col">CONTRASEÑA</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row"></th>
					<td class="text-dark fs-3 fw-bold"><?php echo $a;?></td>
					<td class="text-dark fs-3 fw-bold"><?php echo $b;?></td>
					<td class="text-dark fs-3 fw-bold"><?php echo $c;?></td>

				</tr>
				
			</tbody>
		</table>
    				}<?php else {
        				header('Location: ../../index1.php ? msg=' .urldecode('LOS CAMPOS SON INCORRECTOS VUELVA A INTENTARLO'));	
    				}
    				
    			}
			?>
	</section><br>
	
	
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>