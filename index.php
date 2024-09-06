<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <style>
        .form{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <form action="controllers/aprendiz.php" method="post" class="form">
        <div class="form__group">
            <label for="">Nombre</label>
            <input type="text" placeholder="Nombre" name="nombre">
        </div>
        <div class="form__group">
            <label for="">Apellido</label>
            <input type="text" placeholder="Apellido" name="apellido">
        </div>
        <div class="form__group">
            <label for="">Edad</label>
            <input type="text" placeholder="Edad" name="edad">
        </div>
        <div class="form__group">
            <label for="">Genero</label>
            <input type="text" placeholder="Genero" name="genero">
        </div>
        <div class="form__group">
            <label for="">Cerrera</label>
            <input type="text" placeholder="Carrera" name="carrera">
        </div>
        <div class="form__group">
            <label for="">Cuenta</label>
            <input type="text" placeholder="Cuenta" name="cuenta">
        </div>
        <div class="form__group">
            <label for="">Promedio</label>
            <input type="text" placeholder="Promedio" name="promedio">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>

<?php
$path = dirname($_SERVER['SCRIPT_NAME']);
$url = $_SERVER['REQUEST_URI'];

$b = substr($url, strlen($path));

echo $url, $path, $b;

?>

<?php
require_once("services/Mail.php");
$email = "jfbecerra@soy.sena.edu.co";
$messaje = "John deje la pereza";
$subject = "Enviando un correo electronico";
$body = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500";
$mail = new Mail($email, $subject, $messaje, $body);
$mail->send();
?>

<form action="">

</form>