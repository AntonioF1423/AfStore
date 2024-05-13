<?php

include("conexion.php");

if(isset($_POST['send'])) {
    if(


        strlen($_POST['id']) >= 1 &&
        strlen($_POST['nombres']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['emaill']) >= 1 &&
        strlen($_POST['telefonoo']) >= 1 &&
        strlen($_POST['fecha']) >= 1 
    ) {
        $id_cliente = trim($_POST['id']);
        $name = trim($_POST['nombres']);
        $direction = trim($_POST['direccion']);
        $email = trim($_POST['emaill']);
        $phone = trim($_POST['telefonoo']);
        $año_nacimiento = trim($_POST['fecha']);
        $consulta = "INSERT INTO 1registro(id_cliente, nombres_cliente, dirección, email, telefono, fecha_nacimiento) 
        VALUES ('$id_cliente', '$name', '$direction', '$email', '$phone', '$año_nacimiento') ";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            ?>
            <h3 class="success">Tu registro se ha completado </h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrió un error</h3>
            <?php
        }
    } else  {
        ?>
        <h3 class="error">Llenar todos los campos</h3>
        <?php
    
    }
}


?>