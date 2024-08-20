<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Ejemplo</title>
</head>
<style>
    input{
        padding: 10px;
        background-color: transparent;
        border: 2px solid #fcc23f;
        border-radius: 5px;
        width: 300px;
        color:#eee;
        font-size: 12px;
        transition: all 0.2s ease;
    }
    label{
        position: absolute;
        /*left: 10px;
        top: 12px;*/
        padding: 0 4px;
        color: #fcc23f;
        background-color: #0d1019;
        transition: all 0.2s ease;
        pointer-events: none;
    }
    input:not(:placeholder-shown)~label,
    input:focus~label{
        top: -4px;
        font-size: 13px;
    }
</style>
<body><center>
    <div></div><br>
    <form action="controlador/validacion2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="" required><br>

        <input type="submit" value="Enviar">
    </form>

</center>
</body>
</html>