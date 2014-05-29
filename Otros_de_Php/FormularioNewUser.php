<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Css/Formularios.css">
	<script type="text/javascript" src="Js/Formularios.js"></script>
</head>
<body>
	<div id="Centrado">
		<form name="FormUser" method="post" Action="Php/Formulario.php" onsubmit="Verificacion">
			<h2>Formulario Nuevo Usuario</h2>
			<br>
			Nombre:<input type="text" name="Nombre" onkeypress="return Letras(event)">
			<br>
			Apellido:<input type="text" name="Apellido" onkeypress="return Letras(event)">
			<br>
			Genero:<select name="Sexo">
				<option>SELECCIONE GENERO</option>
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
			</select>
			<br>
			Tipo de Documento:<select name="Documento">
				<option>SELECCIONE TIPO DE DOC</option>
			<?php
			$servidor = "localhost";
			$usuario = "root";
			$base = "EjerPhp";
			$conexion = mysql_connect($servidor, $usuario) or die("Error al conectarse al servidor");
			mysql_select_db($base,$conexion) or die("Error al conectarse a la base de datos".mysql_error());
			$buscar = mysql_query("SELECT * FROM tipodocs",$conexion);
			while ($datos = mysql_fetch_assoc($buscar)){
				?> 
			
				<option value="<?php echo  $datos["Nombre"]?>"><?php echo $datos["Nombre"]?></option>
			<?php }
			?>
			</select>
			<br>
			Numero de Documento:<input type="text" name="Num" onkeypress="return Numeros(event)">
			<br>
			
			Email:<input type="email" name="Mail">
			<br>
			Contraseña:<input type="password" name="password" onchange="Tamano()">
			<br>
			Por Favor confirme su Contraseña:<input type="password" name="password2" onchange="Contraseña()">
			<br>

			Tipo de Rol:<select name="Roles">
				<option>SELECCIONE TIPO DE ROL</option>
				<?php
			$servidor = "localhost";
			$usuario = "root";
			$base = "EjerPhp";
			$conexion = mysql_connect($servidor, $usuario) or die("Error al conectarse al servidor");
			mysql_select_db($base,$conexion) or die("Error al conectarse a la base de datos".mysql_error());
			$buscar = mysql_query("SELECT * FROM roles",$conexion);
			while ($datos = mysql_fetch_assoc($buscar)){
				?> 
			
				<option value="<?php echo  $datos["Nombre"]?>"><?php echo $datos["Nombre"]?></option>
			<?php }
			?>
			</select>
			<br>
			<input type="submit" value="Enviar" >
		</form>
	</div>
</body>
</html>