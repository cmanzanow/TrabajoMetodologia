<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Municipalidad de Illapel</title>

      <link rel="stylesheet" href="../Assets/css/RecuperarPW.css">
      <link rel="stylesheet" href="../Assets/css/font-awesome.css">
      <script src="../Assets/js/jquery-3.2.1.js"></script>
      <script src="../Assets/js/transicion5.js"></script>
      <script src="../Assets/js/registro_validacion15.js"></script>
      
    </head>
    
    <body>

        <img id="fondo" src="../Assets/imagen/fondo.png" alt="background image" />

        <form action="../Controlador/CambiarPW.php" method="post" class="form_contact">
            <h1>Para cambiar su contraseña:</h1>
            <div class="inset">
            <p>
                <label for="user">Ingrese su rut</label>
                <input type="text" name="user" id="user" placeholder="Ejemplo: 17907576-8"autocomplete="off" required>
            </p>
             <p>
                <label for="email">Ingrese su email</label>
                <input type="text" name="email" id="email" placeholder="Ejemplo:asunto@subasta.com" autocomplete="off" required>
            </p>

            </div>

            <p class="p-container">
                <a href="../Controlador/Login.php"><input type='button' name='up' id='up' value='Atrás'></a>
                <input type="submit" name="go" id="go" value="Continuar">
            </p>
        </form>

        <div class="footer">
            <p></p>
        </div>

      </body>

</html>