<?php

include "conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$identidad = $_POST['identidad'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$correoElectronico = $_POST['correoElectronico'];
$fotoPerfil = $_POST['fotoPerfil'];

//echo "$nombre, $apellido, $identidad, $fechaNacimiento, $correoElectronico, $fotoPerfil";

$query = "INSERT INTO usuario VALUES('$nombre', '$apellido', '$identidad', '$fechaNacimiento', '$correoElectronico', '$fotoPerfil');";
$resultado = mysqli_query($conexion, $query);

if(!$resultado) {
  die("Query Failed.");
}

/*----------VARIABLES DE CORREO-------------*/

$to      = $correoElectronico;
$subject = "Correo de Confirmacion";
$message = 'Hola '.$nombre."\r\n"." Tu cuenta se ha registrado exitosamente";
$headers = 'De: Form' . "\r\n" .
'Dudas y/o sugerencias: (tu correo)' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('location: index.php');

 ?>
