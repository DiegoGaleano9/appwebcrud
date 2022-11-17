<?php
require_once('conexion.php');
$nombre=$_POST ['nombre'];
$apellido=$_POST ['apellido'];
$email=$_POST ['email'];
$identificacion=$_POST ['id'];
print('<br>');
print($nombre);
print('<br>');
print($apellido);
print('<br>');
print($email);
print('<br>');
print($identificacion);

$sql=("INSERT INTO `estudiantes` (`nombre`, `apellido`, `email`, `identificacion`) 
VALUES ('$nombre', '$apellido', '$email', '$identificacion')");

if (mysqli_query($conn, $sql)) {
    echo "Exito en la insercion";
    header("Location: ../index.html", TRUE, 301);
    exit();
    mysqli_close($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



 






?>