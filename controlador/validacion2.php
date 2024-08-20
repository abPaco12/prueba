<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nombre = $_POST["user"];
    $email = $_POST["pass"];
    
    //$palabraResultado = ($genero === "femenino") ? "FEMENINO" : "MASCULINO";
    // Realiza la validación aquí, por ejemplo:
    if (empty($nombre) && empty($email)) 
    {
        // La validación falla, redirige a otra página de error
        header('Location: ../index.php? msg2=' .urldecode('LOS DATOS SON INCORRECTOS'));
    }
    if(/*preg_match("/^[a-zA-Z]+$/", $nomP) && preg_match("/^[a-zA-Z]+$/", $nomS) && preg_match("/^[a-zA-Z]+$/", $apelliP) && preg_match("/^[a-zA-Z]+$/", $apelliM) &&*/ $nombre == 'PacoPorros@loko.com' && $email == 'lol123456789')
    {
        header("Location: ../vista/public/resultado1.php?nombre=$nombre&email=$email");
    }
    else{ 
        header("Location: ../index.php?msg=" . urldecode('LOS DATOS ESTAN VACIOS :('));
       }
}
?>
