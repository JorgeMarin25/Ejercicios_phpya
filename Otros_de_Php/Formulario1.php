<!doctype Html>
<html lang="ES">
	<head>
	<title>Formulario</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Css/Formularios.css">
	<?php include("Php/Funciones.php") ?>
	</head>
	<body>
		<h1>Formulario de Creacion de Tipos de Documentos y Tipos de Roles</h1>

		<form name="FormularioDoc" method="post" Action="Php/Funciones.php">
			<h3>Creacion de Tipos de Documentos</h3>
			<strong>Sigla</strong>
			<input type="Text" Size="2px" name="Sigla"><br>
			<strong>Tipo de Documento</strong>
			<input type="Text" Size="20px" name="TipoDoc"><br>
			<input type="submit" value="Enviar"><br><br>
		</form>
		
		<form name="FormularioRoles" method="post" Action="Php/Funciones.php" >
			<strong>Tipo de Rol</strong>
			<input type="Text" Size="20px" name="TipoRol"><br><br>
			<strong>Descripcion</strong><br>
			<textarea name="descrip" cols="50" rows="5" placeholder="Haga una Breve Descripcion del Rol en menos de 255 caracteres" maxlength="255" ></textarea><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>