<?php
$con = mysqli_connect('localhost', 'root', '', 'formulario') 
    or die('Error en la conexión con el servidor local');

$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
$visitas = mysqli_real_escape_string($con, $_POST["visitas"]);
$lugar = mysqli_real_escape_string($con, $_POST["lugar"]);
$servicios = mysqli_real_escape_string($con, $_POST["servicios"]);
$opinion = mysqli_real_escape_string($con, $_POST["opinion"]);
$experiencia = mysqli_real_escape_string($con, $_POST["experiencia"]);
$sugerencias = mysqli_real_escape_string($con, $_POST["sugerencias"]);

$sql = "INSERT INTO datos 
        (Nombre, Visitas, Lugar, Servicios, Opinion, Experiencia, Sugerencias) 
        VALUES (
          '$nombre', '$visitas', '$lugar', 
          '$servicios', '$opinion', '$experiencia', '$sugerencias'
        )";

$resultado = mysqli_query($con, $sql) 
    or die('Error en el query de la base de datos');

mysqli_close($con);

// Redirige automáticamente a una página de agradecimiento
header("Location: inicio.html");
exit;
?>
