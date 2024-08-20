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
	body{
	top: 50%;
	width: 100%;
	height: 100vh; 
	background-image: url('../../p0.jpg');
	background-position: center;
	background-size: cover;
	/*filter: blur(5px);*/
}
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
<body class="bg-secondary">
	<section class="container rounded-2" style="background: transparent;">
		<main class="row">
<?php

if(isset($_POST['enviar'] ) && $_SERVER["REQUEST_METHOD"]=="POST"){
	$valor=$_POST['t1'];
	$valor1=$_POST['t2'];
	$valor2=$_POST['t3'];

	if(($valor,FILTER_VALIDATE_INT)===false && $valor<0 || $valor>100 || empty($valor) || !is_numeric($valor) ||  $valor1<0 || $valor1>100 || empty($valor1)  || !is_numeric($valor1) || ! $valor2<0 || $valor2>100 || empty($valor2)|| is_numeric($valor2)) 
	{
		echo '<br>';
		echo '<section class="container rounded-5" style="background:transparent;">';
		echo '<span class="text-danger fs-4 fw-bold fst-italic">ERROR EL DATO NO ES VALIDO</span>';
		echo '</section>';
	}
	else{
		echo '<br>';
		echo '<section class="container rounded-5" style="background:transparent;">';
		echo '<span class="fs-4 text-danger fst-italic fw-bold">LOS CAMPOS ESTAN ELLOS</span>';
		echo '</section>';
	}
}
	
	$na=$valor+$valor1+$valor2;
	$nb=$valor*$valor1*$valor2;

 ?>
 <table>
	<thead>
		<!--<tr>
			<th scope="col">Mayores y Menores</th>
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col"></th>
		</tr>-->
	</thead>
	<tbody>
		<tr>
			<th scope="row" class=" text-danger fs-3">variables ingresadas</th>
			<th class=" text-danger fs-3"><?php echo $valor;?></th>
			<th class=" text-danger fs-3"><?php echo $valor1;?></th>
			<th class=" text-danger fs-3"><?php echo $valor2;?></th>
		</tr>
		<tr>
			<th class=" text-info fs-3">LA SUMA</th>
			<th class=" text-info fs-3"scope="col"></th>
			<th class=" text-info fs-3"scope="col"></th>
			<th class=" text-info fs-3"><?php echo $na;?></th>
		</tr>
		<tr>
			<th class=" text-info fs-3">LA MULTIPLICACION </th>
			<th class=" text-info fs-3"scope="col"></th>
			<th class=" text-info fs-3"scope="col"></th>
			<th class=" text-info fs-3"><?php echo $nb;?></th>
		</tr>
	</tbody>
	</table>
	<center><a href="../../index4.php" class="btn btn-primary text-white text-decoration-none fs-2 rounded-4">VOLVER</a></center>
				</main>	
	</section>

</body>
</html>
