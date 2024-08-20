<?php 
	include("../modelo/bd/config.php");
	include("../modelo/bd/database.php");
	$db=new DataBase;
	if(isset($_POST["enviar"])){
		$nombre=mysqli_real_escape_string($db->link,$_POST["nombre"]);
		$apellidos=mysqli_real_escape_string($db->link,$_POST["apellido"]);
		$direcc=mysqli_real_escape_string($db->link,$_POST["direc"]);
		$celu=mysqli_real_escape_string($db->link,$_POST["cel"]);

		if(empty($nombre)||empty($apellidos)||empty($direcc)||empty($celu)){
			header("Location:../vista/public/registrarC.php?msg=".urlencode('DEBE LLENAR TODO LOS DATOS'));
					}
		else{
			$query="INSERT INTO cliente(nombre,apellidos,direccion,celular)
			VALUES('$nombre','$apellidos','$direcc','$celu')";
			$create = mysqli_insert_id($db->registerUser($query));

		}
	}
 ?>