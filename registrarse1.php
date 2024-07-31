<?php

session_start();

include_once('conexion1.php');
if (isset($_POST['usuario']) && isset($_POST['NombreCompleto']) && isset($_POST['Clave']) && isset($_POST['RClave'])){
    function validar($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
}


$usuario = validar($_POST['usuario']);
$NombreCompleto = validar($_POST['NombreCompleto']);
$Clave = validar($_POST['Clave']);
$RClave = validar($_POST['RClave']);

$datosusuario = 'usuario=' .$usuario . '&NombreCompleto' . $NombreCompleto;

if (empty($usuario)) {
    header("location:registrarse.php?error=El usuario es requerido&$datosusuario");
    exit();
}elseif(empty($NombreCompleto)){
    header("location:registrarse.php?error=El nombre completo es requerido&$datosusuario");
    exit();
}elseif(empty($Clave)){
    header("location:registrarse.php?error=La clave es requerida&$datosusuario");
    exit();
}elseif(empty($RClave)){
    header("location:registrarse.php?error=Repetir la clave es requerido&$datosusuario");
    exit();
}elseif($Clave !== $RClave){
        header("location:registrarse.php?error=La clave no coincide&$datosusuario");
        exit();
    }else {
        $Clave = md5($Clave);

        $sql = "SELECT * FROM registrarse WHERE Usuario = '$usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0){
            header("location:registrarse.php?error=El usuario ya existe");
        exit();

        }else {
            $sql2 = "INSERT INTO registrarse(NombreCompleto, Usuario, Clave) VALUES('$NombreCompleto','$usuario','$Clave')";
            $query2 = $conexion->query($sql2);

            if($query2) {
                header("location:registrarse.php?success=Usuario creado con exito");
        exit();
        }else{
            header("location:registrarse.php?success=Ocurrió un error");
        exit();
        }
        }
    }
}else {
    header('location: registrarse.php');
    exit();
}


