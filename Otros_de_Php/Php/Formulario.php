<?php
	function EnvioUser(){
		$conexion=mysqli_connect("localhost","root","","ejerphp") 
		or die("Problemas en la conexion");
		$Query="insert into usuarios(tipodoc_id, documento, nombres, apellidos, genero, email, clave, rol_id) values 
			('$_POST[Documento]','$_POST[Num]','$_POST[Nombre]','$_POST[Apellido]','$_POST[Sexo]','$_POST[Mail]','$_POST[password]','$_POST[Roles]')";
		echo $Query;
		/*mysqli_query($conexion,$Query) or die("Problemas en el select".mysqli_error());
		mysqli_close($conexion);
		echo "Usuario Registrado.";*/
	}
	EnvioUser()
?>