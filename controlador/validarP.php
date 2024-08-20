<?php 
	include("../modelo/bd/config.php");
	include("../modelo/bd/database.php");
	$db=new DataBase;
	if(isset($_POST["enviar"])){
		$nombre=mysqli_real_escape_string($db->link,$_POST["nombre"]);
		$apellidos=mysqli_real_escape_string($db->link,$_POST["direccion"]);
		$direcc=mysqli_real_escape_string($db->link,$_POST["telefono"]);

		if(empty($nombre)||empty($apellidos)||empty($direcc)){
			header("Location:../vista/public/registrarPr.php?msg=".urlencode('DEBE LLENAR TODO LOS DATOS'));
					}
		else{
			$query="INSERT INTO proveedor(id_proveedor,nombre,direccion,numero_tel)
			VALUES('$nombre','$apellidos','$direcc')";
			$create = mysqli_insert_id($db->registerP($query));

		}
	}
 ?>