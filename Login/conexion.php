<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "registro";

   $conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "Conexión fallida";
}
