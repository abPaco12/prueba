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
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index3.php">PRODUCTO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index2.php">CLIENTE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index4.php">PROVEEDOR</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index5.php">COMPRA</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">SALIR</a>
                                        </li>
                                    </ul>
                                </div>
                        </nav>
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-6 d-none d-md-block">
                                    <img src="darth-vader-lightsaber-star-wars_1220x2160_xtrafondos.com.jpg" alt="login form" class="img-fluid " style="border-radius: 0.7rem 0 0 0.7rem; width: 35rem; height: 32rem;">
                                </div>
                                <div class="col-md-6 col-lg-6 d-flex align-items-center bg-dark bg-opacity-50">
                                    <div class="card-body text-black">
                                        <form action="controlador/validarCli.php" method="post" class="row">
                                            <?php
                                            if(isset($_GET['msg'])){
                                                echo "<center><div class='alert alert-secondary'><span>".$_GET['msg']."</span></div></center>";
                                            } 
                                             ?>
                                            <center> <div class="mb-1">
                                                <span class="h2 fw-bold text-danger">REGISTRO DE COMPRA</span>
                                             </div></center>
                                             
                                             
                                             <div class="col-md-6 mb-1">
                                                <input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="nombre" id="nombre">
                                                <label class="form-label text-white">NOMBRE</label>
                                             </div>
                                              <div class="col-md-6 mb-1">
                                                <input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="direccion" id="direccion">
                                                <label class="form-label text-white">direccion</label>
                                             </div>
                                              <div class="col-md-6 mb-1">
                                                <input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="tele" id="tele">
                                                <label class="form-label text-white">TELEFONO</label>
                                             </div>
                                             <!--<div class="col-md-6 mb-1">
                                                <input type="text" class="form-control form-control-lg rounded-5 bg-secondary" name="num" id="num">
                                                <label class="form-label text-white">NUMERO DE EXISTENCIAS</label>
                                             </div>-->
                                             <center><div class="mb-1">
                                                <button type="submit" class="btn btn-dark btn-lg btn-block" id="enviar" name="enviar">INICIAR</button> 
                                                <a href="index2.php" class="btn btn-secondary btn-lg btn-block">LIMPIAR</a>
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