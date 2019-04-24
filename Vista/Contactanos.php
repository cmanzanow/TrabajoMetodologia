﻿<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Formulario</title>
<link href="../Assets/css/styles-cont.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- formulario de contacto -->

	<form action="envia.php" method="post" class="form-consulta"> 
		<label>Nombre y apellido: <span>*</span>
			<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
		</label>
		
		<label>Email: <span>*</span>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
		
		<label>Consulta:
			<textarea name="consulta" class="campo-form"></textarea>
		</label>

		<input type="submit" value="Enviar" class="btn-form">
	</form>

<!-- formulario -->

</body>
</html>