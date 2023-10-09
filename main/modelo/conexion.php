<?php

$servername = "localhost";

$database = "distribuidora";

$username = "root";

$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database);
$conexion->set_charset("utf8");

//  if($conexion->connect_error){
//  die("Conexion Fallida" . $conexion->connect_error);
//  }else{
//  echo"Conexion exitosa";
//}
?>
