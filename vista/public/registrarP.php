<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title></title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
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
  							<h3 class="navbar-brand fw-bold" href="#">INICIO</h3>
  								<div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../index4.php">SALIR</a>
                                        </li>
                                    </ul>
                                </div>
                        </nav>
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-6 d-none d-md-block">
                                    <img src="../../op.jpg" alt="login form" class="img-fluid " style="border-radius: 0.7rem 0 0 0.7rem; width: 35rem; height: 32rem;">
                                </div>
                                <div class="col-md-6 col-lg-6 d-flex align-items-center bg-dark bg-opacity-50">
                                    <div class="card-body text-black">
                                        <form action="#" method="post" class="row">
                                            <?php
                                            if(isset($_GET['msg1'])){
                                                echo "<center><div class='alert alert-secondary'><span>".$_GET['msg1']."</span></div></center>";
                                            } 
                                             ?>
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
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>