<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Municipalidad de Illapel</title>

      <link rel="stylesheet" href="../Assets/css/registros7.css">
      <link rel="stylesheet" href="../assets/css/font-awesome.css">
      <script src="../Assets/js/jquery-3.2.1.js"></script>
      <script src="../Assets/js/transicion5.js"></script>
      <script src="../Assets/js/registro_validacion15.js"></script>

    </head>
    
    <body>
    
        <div id="asd">
        <a href="../index.php" class="botox"><p><br><img alt="Volver al menu inicial" height="100" onmouseout="this.src='../Assets/imagen/boton1.png';" onmouseover="this.src='../Assets/imagen/boton2.png';" src="../Assets/imagen/boton1.png" /></p></a>
        </div>
        <img id="fondo" src="../Assets/imagen/fondo.png" alt="background image" />

        <div class="container">
            <div class="wrapper">
                <ul class="steps">
                    <li class="is-active">Paso 1</li>
                    <li>Paso 2</li>
                    <li>Paso 3</li>
                    <li>Paso 4</li>

                </ul>

                

                <form action="../Controlador/Exito.php?usuario=--><?php echo"inicio";?>" method="post" class="form-wrapper" onsubmit= "return validar_formulario()">
                    <fieldset class="section is-active">
                        <h3>Registro de cuenta</h3>
                        
                        <div class = "mensaje" id="mensaje">
                            <p>Puede ingresar letras, números y los siguientes símbolos:<br>
                               . _ - (min-max: 4-20)</p>
                            <input type="text" name="nickname" id="nickname" autocomplete="off" placeholder="Usuario: Leonardo123">
                            <img src="../Assets/imagen/info.png" class= "comprobado" id="comprobado" />
                        </div>

                        <div class = "mensaje2" id="mensaje2">
                            <p>Puede ingresar el rut como: 12.345.678-9 o sin puntos ni<br>
                               guion: 12 345 678 9</p>
                            <input type="text" name="rut" id="rut" autocomplete="off" placeholder="Rut: 12.345.678-9">
                            <img src="../Assets/imagen/info.png" class= "comprobado2" id="comprobado2" />
                        </div>

                        <div class = "mensaje3" id="mensaje3">
                            <p>Ingrese el correo observando el siguiente formato de<br> 
                               ejemplo: 'Nombre_del_correo'@gmail.com (max: 39)</p>
                            <input type="text" name="email" id="email" autocomplete="off" placeholder="Correo Electronico">
                            <img src="../Assets/imagen/info.png" class= "comprobado3" id="comprobado3" />
                        </div>
                        <div class="volver"><a href="../index.php">Volver</a></div>
                        <div class="button">Siguiente</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3>Datos personales</h3>
                        
                        <div class = "mensaje4" id="mensaje4">
                            <p>Puede ingresar letras, numeros y los siguientes<br>
                               simbolos: ._- (min-max: 2-58)</p>
                            <input type="text" name="name" id="name" autocomplete="off" placeholder="Nombre: Leonardo Alonso">
                            <img src="../Assets/imagen/info.png" class= "comprobado4" id="comprobado4" />
                        </div>

                        <div class = "mensaje5" id="mensaje5">
                            <p>Puede ingresar letras, numeros y los siguientes<br>
                               simbolos: ._- (min-max: 2-58)</p>
                            <input type="text" name="lastname" id="lastname" autocomplete="off" placeholder="Apellido: Cortez Araya">
                            <img src="../Assets/imagen/info.png" class= "comprobado5" id="comprobado5" />
                        </div>

                        <div class = "mensaje6" id="mensaje6">
                            <p>Puede ingresar letras, numeros y los siguientes<br>
                               simbolos: ,.-_!¿¡?#&$ (min-max: 4-100)</p>
                            <input type="text" name="address" id="address" autocomplete="off" placeholder="Direccion: Los arbolitos #123">
                            <img src="../Assets/imagen/info.png" class= "comprobado6" id="comprobado6" />
                        </div>

                        <div class="atras">Atras</div>
                        <div class="button">Siguiente</div>
                    </fieldset>



                    <fieldset class="section">
                        <h3>Genero</h3>
                            <div class="row cf">
                                <div class="four col">
                                    <input type="radio" name="r1" id="r1" value='hombre' checked>
                                    <label for="r1">
                                        <h4>Masculino</h4>
                                    </label>
                                </div>

                                <div class="four col">
                                    <input type="radio" name="r1" id="r2" value='mujer'>
                                    <label for="r2">
                                        <h4>Femenino</h4>
                                    </label>
                                </div>
                            </div>
                        <div class="atras">Atras</div>
                        <div class="button">Siguiente</div>
                    </fieldset>

                    <fieldset class="section">
                        <h3>Contraseña y teléfono</h3>

                        <div class = "mensaje7" id="mensaje7">
                            <p>Puede ingresar letras, numeros y los siguientes<br>
                               simbolos: .-_#$%&*+ (min-max: 4-30)</p>
                            <input type="password" name="password" id="password" autocomplete="off" placeholder="Contraseña">
                            <img src="../Assets/imagen/info.png" class= "comprobado7" id="comprobado7" />
                        </div>

                        <div class = "mensaje8" id="mensaje8">
                            <p>Puede ingresar letras, numeros y los siguientes<br>
                               simbolos: .-_#$%&*+ (min-max: 4-30)</p>
                            <input type="password" name="password2" id="password2" autocomplete="off" placeholder="Repetir Contraseña">
                            <img src="../Assets/imagen/info.png" class= "comprobado8" id="comprobado8" />
                        </div>

                        <div class = "mensaje9" id="mensaje9">
                            <p>Puede ingresar solo numeros (max: 12)</p>
                            <input type="text" name="phone" id="phone" autocomplete="off" placeholder="Telefono: 996447945">
                            <img src="../Assets/imagen/info.png" class= "comprobado9" id="comprobado9" />
                        </div>
               
                        <div class="atras">Atras</div>
                        <input type="submit" class="submit" value="Registrarse" id="submit">      
                    </fieldset>
                    
                    
                </form>
            </div>
        </div>

    </body>

</html>