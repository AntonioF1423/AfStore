<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/tiendaonline/css/estilos8.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="contenedor">
    <h1><ins>Registrarse</ins></h1>
    <br>
    <form action="registrarse1.php" method="POST">
      
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"> <?php echo $_GET['error']?></p>
    <?php } ?>
    <br>

    <?php if (isset($_GET['success'])) { ?>
      <p class="success"> <?php echo $_GET['success']?></p>
    <?php } ?>
    <br>
    
        <label for="">
            <img width="25px" src="icons/user.svg" alt="">
            Usuario
      </label>
      <input type="text" placeholder="Ingrese usuario" name="usuario">
      <label for="">
        <img width="25px" src="icons/user.svg" alt="">
        Nombre completo
  </label>
  <input type="text" placeholder="Ingrese nombre completo" name="NombreCompleto">
      <label for="">
        <img width="25px" src="icons/key1.svg" alt="">
        Clave
      </label>
      <input type="password" placeholder="Ingrese clave" name="Clave">
      <label for="">
        <img width="25px" src="icons/key1.svg" alt="">
        Repetir Clave
      </label>
      <input type="password" placeholder="Repita su clave" name="RClave">

     <input type="submit" class="button" value="Registrarse" > 

     <a href="login/index.php" class="boton_ingresar">
        Volver al inicio
     </a>
      
    </form>
</div>
</body>
</html>