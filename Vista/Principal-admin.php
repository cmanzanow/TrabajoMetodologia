<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Subasta</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="../Assets/css/style5.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/font-awesome.min.css">
  
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
  <div class="overlay-navigation">
  <nav role="navigation">
    <ul>
      <li><a href="../Controlador/Notificar.php" data-content="Notify">Notificar</a></li>
      <li><a href="../Controlador/Subastar.php?usuario=<?php echo($id);?>" data-content="Auction">Subastar</a></li>
      <li><a href="../Controlador/Buscar-subasta.php" data-content="Search Auction">Buscar Subasta</a></li>
      <li><a href="#" data-content="information">Información de mi Viaje</a></li>
      <li><a href="../Controlador/Contactanos.php" data-content="contact us">Contáctanos</a></li>
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