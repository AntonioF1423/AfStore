<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="srylesheet" integrity="sha384-1BmE4ñWq78iYhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <!-- Conexión con el archivo de estilos del formulario-->
    <link rel="stylesheet" href="styles.css">
    <!-- Este es un link de fontawesome para ponerle iconos a cada campo el formulario-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesión</title>
</head>
<body>
    <!-- Formulario-->
    <form action="iniciarsesion.php" method="post">
        <h1>Iniciar Sesión</h1>
        <hr>
        <?php
            if (isset ($_GET['error'])) {
             ?>
             <p class= "error">
                <?php 
                echo $_GET['error']
                ?>
             </p>  
        
        <?php
            }
        ?>
        
        
        <hr>
        <i class ="fa-solid fa-user"></i>
        <label>Usuario</label> 
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class ="fa-solid fa-unlock"></i>
        <label>Clave</label> 
        <input type="text" name="Clave" placeholder="Clave">
        <hr>

        <input type="submit" class="button" value="Ingresar" > 
        <a class="btn" href="/../tiendaonline/registrarse.php">Crear cuenta</a>
        
 




    </form>
</body>
</html>