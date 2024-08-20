<?php 
	include("../modelo/bd/config.php");
	include("../modelo/bd/database.php");
	$db = new DataBase;

	if(isset($_POST["enviar"])){
		$nombre = mysqli_real_escape_string($db->link, $_POST["descripcion"]);
		$apellidos = mysqli_real_escape_string($db->link, $_POST["marca"]);
		$direcc = mysqli_real_escape_string($db->link, $_POST["precio"]);
		$celu = mysqli_real_escape_string($db->link, $_POST["num"]);

		if(empty($nombre) || empty($apellidos) || empty($direcc) || empty($celu)){
			header("Location:../vista/public/index3.php?msg=".urlencode('DEBE LLENAR TODO LOS DATOS'));
		}
		else{
			$query = "INSERT INTO producto(id_producto, descripcion, marca, precio,numero_existencias) VALUES('$nombre','$apellidos','$direcc','$celu')";
			$create = mysqli_insert_id($db->registerPr($query));
		}
	}
?>
