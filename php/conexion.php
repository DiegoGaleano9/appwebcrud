<?php
$servername = "localhost";
$database = "decimoa";
$username = "root";
$password = "";
// Crear conexión
$conn=mysqli_connect($servername, 
$username, $password, $database);
// Verificar conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
   // print "Connection succesful";
    //header("Location: ../index.html", TRUE, 301);
    
}
?>