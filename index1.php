<?php session_start(); ?> 
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"/> 
<title>Login.php</title> 
</head>  
<link rel="stylesheet" type="text/css " href="css/stylephp.css">
<body> 
<?php 
if(isset($_SESSION['nombre'])){ 
echo "<p>Has iniciado sesion como: " . $_SESSION['nombre'] . ""; 
echo "<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>"; 
echo "<br><p><a href='PanCtrl.php'>Ir al panel de control</a>"; 
}else {
?> 
<div class="csio">
<h2>Creando la sesion</h2> 
<form action="PanCtrl.php" method="POST"> 
</div>
<div class="cnom2">
<p>Nombres:</p> 
<p><input type="text" placeholder="Ingrese su Nombre" name="nombre" required/></p> <p><input type="submit" value="Crear Sesion" /></p> 
</form> 
<?php 
}  
?> 
</div>
</body> </html> 






