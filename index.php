<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title></title>
	<link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css">
</head>
<style>
	*{
		font-family: Kristen ITC;
	}
	
</style>
<body style="background-color:#303030;">
	<section class="container bg-secondary bg-opacity-50 rounded-5">
		<main class="vh-100">
			<div class="container py-5 h-100"> 

				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col col-xl-10">
						<div class="card border-white border border-4" style="border-radius: 1rem;">
							<div class="row g-0">
								
								<div class="col-md-6 col-lg-6 d-none d-md-block">
									<img src="download.jpg" alt="login form" class="img-fluid rounded-circle mb-5" style="border-radius: 0.7rem 0 0 0.7rem; width: 31rem;">
								</div>
								<div class="col-md-6 col-lg-6 d-flex align-items-center bg-dark bg-opacity-50">
									<div class="card-body text-black">
										<form action="controlador/validacion2.php" method="post" class="row">
											<?php
											if(isset($_GET['msg'])){
												echo "<center><div class='alert alert-secondary'><span>".$_GET['msg']."</span></div></center>";
											}
											if(isset($_GET['msg2'])){
												echo "<center><div class='alert alert-warning'><span>".$_GET['msg2']."</span></div></center>";
											}  
											 ?>
											<center> <div class="mb-1">
											 	<span class="h2 fw-bold text-danger">REGISTRO ESTUDIANTIL</span>
											 </div></center>
											 <!--
											 <div class="col-md-6 mb-1">
											 	<input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="nombreP" id="nombreP" >
											 	<label class="form-label text-white">PRIMER NOMBRE</label>
											 </div>
											 <div class="col-md-6 mb-1">
											 	<input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="nombreS" id="nombreS">
											 	<label class="form-label text-white">SEGUNDO NOMBRE</label>
											 </div>
											  <div class="col-md-6 mb-1">
											 	<input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="apellidoP" id="apellidoP">
											 	<label class="form-label text-white">APELLIDO PATERNO</label>
											 </div>
											  <div class="col-md-6 mb-1">
											 	<input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="apellidoM" id="apellidoM">
											 	<label class="form-label text-white">APELLIDO MATERNO</label>
											 </div>-->
											 <div class=" mb-1">
											 	<input type="email" class="form-control form-control-lg rounded-5 bg-secondary" name="user" id="user">
											 	<label class="form-label text-white">CORREO ELECTRONICO</label>
											 </div>
											 <div class="mb-1">
											 	<input type="password" class="form-control form-control-lg rounded-5 bg-secondary" name="pass" id="pass">
											 	<label class="form-label text-white">CONTRASEÑA</label>
											 </div>
											 <!--<div class="mb-1">
											 	<input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="direc" id="direc">
											 	<label class="form-label text-white">DIRECCION</label>
											 </div>
											 <div class="mb-1">
											 	 <label class="form-label text-white"><input type="radio" name="genero" id="genero" value="femenino">FEMENINO</label>
  												<label class="form-label text-white"><input type="radio" name="genero" id="genero" value="masculino">MASCULINO</label>	<br>	
  												<label class="form-label text-white">GENERO:</label>
  											</div>
											 <div class="col-md-6 mb-1">
											 	<select name="naci" id="naci" class="form-control bg-secondary text-white rounded-5">
											 		<option>--SELC NACIONALIDAD--</option>
													<option>Boliviano</option>
            										<option>Quechua</option>
            										<option>Aymara</option>
            										<option>Guaraní</option>
            										<option>Afroboliviano</option>
												</select><br>
											 </div>
											 <div class="col-md-6 mb-1">
											 	<select name="depa" id="depa" class="form-control bg-secondary text-white rounded-5">
											 		<option>--SELC DEPARTAMENTO--</option>
													<option>LA PAZ</option>
            										<option>ORURO</option>
            										<option>POTOSI</option>
            										<option>TARIJA</option>
            										<option>CHUQUISACA</option>
            										<option>COCHABAMBA</option>
            										<option>SANTA CRUZ</option>
            										<option>BENI</option>
            										<option>PANDO</option>
												</select><br>
											 </div>
											 <div class="col-md-4 mb-1">
											 	<select name="carrera" id="carrera" class="form-control bg-secondary text-white rounded-5">
											 		<option>--CARRERA--</option>
											 		<option>SISTEMA INFORMATICOS</option>
											 		<option>CONSTRUCCION</option>
											 		<option>CONTADURIA</option>
											 		<option>ELECTICIDAD INDUSTRIAL</option>
											 	</select>
											 </div>
											 <div class="col-md-4 mb-1">
											 	<select name="turno" id="turno" class="form-control bg-secondary text-white rounded-5">
											 		<option>--TURNO--</option>
											 		<option>NOCHE</option>
											 		<option>MAÑANA</option>
											 	</select>
											 </div>
											 <div class="col-md-4  mb-1">
											 	<select name="grado" id="grado" class="form-control bg-secondary text-white rounded-5">
											 		<option>--GRADO--</option>
											 		<option>1"A"</option>
											 		<option>1"B"</option>
											 		<option>2"A"</option>
											 		<option>2"B"</option>
											 		<option>3"A"</option>
											 		<option>3"B"</option>
											 	</select>
											 </div>-->
											 <center><div class="mb-1">
											 	<button type="submit" class="btn btn-dark btn-lg btn-block" id="enviar" name="enviar">INICIAR</button> 
											 	<a href="index.php" class="btn btn-secondary btn-lg btn-block">LIMPIAR</a>
<!--
											 	<div class="mt-2"></div>
											 	<a href="#!" class="small  text-white">¿HAS OLVIDADO TU CONTRASEÑA?</a>
											 	<span class="mb-3 pb-lg-2 text-dark fw-bold">¿NO TIENES UNA CUENTA?<a href="#" class="text-dark fw-bold">REGITRAR A AQUI</a></span>-->
											 </div></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</main>
		</section>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>