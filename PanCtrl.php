<?php session_start();?> 
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"/> 
<title>Panel Control</title> 
<link rel="stylesheet" type="text/css " href="css/stylephp.css">
</head> 
<body>
<div class="csio">
<h2>La sesion creada correctamente</h2>
</div>  
<div class="csio">
<p> 
<?php 
if(isset($_POST['nombre'])){ 
$_SESSION['nombre'] = $_POST['nombre']; 
echo "Bienvenido! Has iniciado sesion como:<b> ".$_POST['nombre']."</b>"; 

}else{ 
if(isset($_SESSION['nombre'])){ 
echo "Has iniciado Sesion como: ".$_SESSION['nombre']; 
}else{ 
// Si la sesion expiro o no se creo mostraremos el siguiente mensaje 
echo "Acceso Restringido"; 
} 
} 
?></p> 
</div>
<br> 
<div class="csio">
<p><a href="Index2.html">Ir a la página inicial class </a></p>
</div>
<br> 

<div class="csio">
<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p> 
</div>
</body> 
</html>






