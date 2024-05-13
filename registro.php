<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/prueba/style.css" />
</head>
<body>
    <section class="formulario container">

        <form method="post" autocomplete="off">

            <h2>Registro</h2>
            <div class="input-group">
            <div class="input-container">
                    <input type="text" name="id" placeholder="id_cliente">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="nombres" placeholder="Nombres">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="direccion" placeholder="Dirección">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="emaill" placeholder="Email">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="telefonoo" placeholder="Teléfono">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="text" id=fecha name="fecha" value="" placeholder="mm/dd/yyyy">
                    <i class="fa-solid fa-user"></i>
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunction()">

            </div>
            <a href="inicio.php" class="volver al inicio">
        Volver al inicio
     </a>


        </form>

        <?php
             include("send.php");          
        ?>

        <script>
          function myFunction() {
            window.location.href="http://localhost/tiendaonline"
          }
        </script>



    </section>
</body>
</html>