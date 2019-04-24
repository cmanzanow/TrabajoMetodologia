<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subastar</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="../Assets/css/style6.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../Assets/css/Subastar1.css">
    <script src="../Assets/js/jquery-3.2.1.js"></script>
    <script src="../Assets/js/validar_subasta2.js"></script>
    <script src="http://blog.ikhuerta.com/jsDownload/dollar_get.js" type="text/javascript"></script>
    
</head>
<body>
    <img id="fondo" src="../Assets/imagen/negro.jpg" alt="background image" />    
  <!--<div id="Login1">
       <h1>Subasta</h1>
        <a id="Log2" href="Controlador/Login.php" ><input type="button" id="Log1" value="Iniciar Seción"></a>        
  </div>-->
  <header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links">
						<li><a id="a1" href="#"><i class="fa fa-user-o"></i> Perfil </a></li>
						<li><a id="a2" href="../index.php"><i class="fa fa-sign-out"></i> Desconectarse </a></li>
					</ul>
				</div>
			</div>
  </header>
    <div id="div-tablita">
        <h1>Subasta tu pasaje</h1>
        <table id="tablita">
            <tr>
                <th>N°</th>
                <th>Código</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Fecha</th>
                <th>Salida</th>
                <th>Asiento</th>
                <th>Empresa Bus</th>
                <th>Estado</th>
            </tr>

            <?php
            
                $i=1;
                foreach($subastar as $sub):
                    echo"<tr><th>".$i."</th>";
                    $i=$i+1;
                    echo"<th>".$sub['codigo']."</th>";
                    echo"<th>".$sub['origen']."</th>";
                    echo"<th>".$sub['destino']."</th>";
                    echo"<th>".$sub['fecha']."</th>";
                    echo"<th>".$sub['salida']."</th>";
                    echo"<th>".$sub['asiento']."</th>";
                    echo"<th>".$sub['empresa']."</th>";
                    echo"<th>".$sub['estado']."</th></tr>";
                endforeach;
            ?>
        </table>
    </div>
    <div id="duv-subastar">
        <span id="span-subastar">Ingrese código del pasaje a subastar:</span>
        <input type="text" id="label-subastar" placeholder="Ejemplo: 232HFH232JD">
        <span id="span-subastar">Para confirmar ingrese su rut:</span>
        <input type="text" id="label-subastar2" placeholder="Ejemplo: 11.111.111-1">
        <input type="button" id="boton-subastar" value="Subastar">
    </div>
    <div class="overlay-navigation">
  <nav role="navigation">
    <ul>
      <li><a href="Controlador/Login.php" data-content="Profile">Perfil</a></li>
      <li><a href="Controlador/Login.php" data-content="Auction">Subastar</a></li>
      <li><a href="Controlador/Login.php" data-content="Search Auction">Buscar Subasta</a></li>
      <li><a href="Controlador/Login.php" data-content="information">Información de mi Viaje</a></li>
      <li><a href="Controlador/Contactanos.php" data-content="contact us">Contáctanos</a></li>
    </ul>
  </nav>
  
</div>

<section class="home">
  <div class="open-overlay">
    <span class="bar-top"></span>
    <span class="bar-middle"></span>
    <span class="bar-bottom"></span>
  </div>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>


    <script  src="../Assets/js/index.js"></script>
    
</body>
</html>