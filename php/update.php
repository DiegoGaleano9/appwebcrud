<?php
require_once("conexion.php");
$campoamodificar = $_POST['campoamodificar'];
$nuevodato = $_POST['ndato'];
$id = $_POST ['id'];
print $campoamodificar;
print "<br>";
print $nuevodato;
print "<br>";
print $id;

$sql=("UPDATE `estudiantes` SET `$campoamodificar` = '$nuevodato'
 WHERE `estudiantes`.`identificacion` = $id ");

if (mysqli_query($conn, $sql)) {
    echo "Exito en la insercion";
    header("Location: ../index.html", TRUE, 301);
    exit();
    mysqli_close($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>SS
