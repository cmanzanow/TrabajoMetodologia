<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Municipalidad de Illapel</title>

      <link rel="stylesheet" href="../Assets/css/transito3.css">
      <link rel="stylesheet" href="../Assets/css/font-awesome.css">
      <script src="../Assets/js/jquery-3.2.1.js"></script>
      <script src="../Assets/js/transicion5.js"></script>
      <script src="../Assets/js/registro_validacion16.js"></script>
      
    </head>
    
    <body>

        <img id="fondo" src="../Assets/imagen/fondo.png" alt="background image" />
<div id="asd">
        <a href="../index.php" class="botox"><p><br><img alt="Volver al menu inicial" height="100" onmouseout="this.src='../Assets/imagen/boton1.png';" onmouseover="this.src='../Assets/imagen/boton2.png';" src="../Assets/imagen/boton1.png" /></p></a>
</div>
        <form action="../Controlador/Principal.php?usuario=<?php echo"inicio";?>" method="post" class="form_contact">
            <h1>Solicitud de hora para licencia de conducir</h1>
            <div class="inset">
            <p>
                <label for="email">Ingrese su rut</label>
                <input type="text" name="user" id="user" placeholder="Ejemplo: 17907576-8"autocomplete="off" required>
            </p>
             <p>
                <label for="password">Ingrese contraseña</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </p>

            <button type="reset" value="Reset">Limpiar</button>

            </div>

            <span style="cursor:pointer" id="recordar">¿Olvidaste tu contraseña?</span>

            <p class="p-container">
                <a href="../Controlador/Registro.php"><input type='button' name='up' id='up' value='Registrarse'></a>
                <input type="submit" name="go" id="go" value="Continuar">
            </p>
        </form>

        <div class="footer">
            <p></p>
        </div>

      </body>

</html>