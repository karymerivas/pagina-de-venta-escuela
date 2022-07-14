<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>conexion 1</title>
</head>
<body>

	<?php 
	$conexion=mysqli_connect("localhost","root","") or die(problemas en la conexion)
	mysqli_selec_db($conexion,"usuarios") or die("problemas en la seleccion de la base de datos");
	mysqli_query($conexion,"insert into usuarios (nombre,apellido,correo,contraseña)
		values('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[correo]','$_REQUEST[contraseña]')")
	or die("problemas en el selec".mysqli_connect_error());
	echo ("su registro se a guardado");
	?>

</body>
</html>