<?php
//REALIAR CONEXION CON LA BASE DE DATOS
//require 'conexion.php';
$conexion = mysqli_connect("localhost", "root", "", "og_laravel");

//RECIBIR DATOS DEL FORMULARIO Y ALMACENARLOS EN VARIABLES
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$comensales = $_POST['comensales'];
$telefono = $_POST['telefono'];
$created_at = date("Y-m-d H:i:s"); 
$updated_at = date("Y-m-d H:i:s"); 

//EJECUTAR CONSULTA 
$insertar = "INSERT INTO reservacions (nombre, correo, hora, fecha, comensales, telefono, created_at, updated_at) VALUES ('$nombre', '$correo', '$hora', '$fecha', '$comensales', '$telefono', '$created_at', '$updated_at')";
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo"<script>alert('ERROR AL REGISTRARSE')</script>";
	echo"<script>window.location='http://localhost/curso/laravel/og_laravel/public/'</script>";
}
else{
	echo"<script>alert('USUARIO REGISTRADO')</script>";
	echo"<script>window.location='http://localhost/curso/laravel/og_laravel/public/'</script>";
}
//CERRAR CONEXION
mysqli_close($conexion);

?>