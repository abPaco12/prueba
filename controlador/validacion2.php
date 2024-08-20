<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomP = $_POST["nombreP"];
    $nomS = $_POST["nombreS"];
    $apelliP = $_POST["apellidoP"];
    $apelliM = $_POST["apellidoM"];
    $nombre = $_POST["user"];
    $email = $_POST["pass"];
    $direc = $_POST["direc"];
    $genero = $_POST["genero"];
    $nacio = $_POST["naci"];
    $depa = $_POST["depa"];
    $carrera = $_POST["carrera"];
    $tur = $_POST["turno"];
    $grad = $_POST["grado"];
$palabraResultado = ($genero === "femenino") ? "FEMENINO" : "MASCULINO";
    // Realiza la validación aquí, por ejemplo:
    if (empty($nomP) && empty($nomS) && empty($apelliP) && empty($apelliM) && empty($nombre) && empty($email) && empty($direc) && empty($genero)  && empty($nacio) && empty($depa) && empty($carrera) && empty($tur) && empty($grad)) 
    {
        // La validación falla, redirige a otra página de error
        header('Location: ../index.php? msg2=' .urldecode('LOS DATOS SON INCORRECTOS'));
    }
    if(preg_match("/^[a-zA-Z]+$/", $nomP) && preg_match("/^[a-zA-Z]+$/", $nomS) && preg_match("/^[a-zA-Z]+$/", $apelliP) && preg_match("/^[a-zA-Z]+$/", $apelliM) && $nombre == 'PacoPorros@loko.com' && $email == 'lol123456789')
    {
        header("Location: ../vista/public/resultado1.php?nomP=$nomP&nomS=$nomS&apelliP=$apelliP&apelliM=$apelliM&nombre=$nombre&email=$email&direc=$direc&gen=$palabraResultado&nacio=$nacio&depa=$depa&carrera=$carrera&tur=$tur&grad=$grad");
    }
    else{ 
        header("Location: ../index.php?msg=" . urldecode('LOS DATOS ESTAN VACIOS :('));
       }
}
?>
