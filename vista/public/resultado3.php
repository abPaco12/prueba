<!DOCTYPE html>
<html>
<head>
    <title>Éxito</title>
</head>
<body>
    <h1>Formulario enviado con éxito</h1>
    <?php
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    ?>
</body>
</html>
