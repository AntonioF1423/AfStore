
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "registro";

$conexion = new mysqli($host, $user, $pass, $db);

if (!$conexion) {
    echo "Conexión fallida";
}