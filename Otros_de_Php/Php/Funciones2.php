<?php
function EnvioDoc(){
		$conexion=mysqli_connect("localhost","root","","EjerPhp") 
		or die("Problemas en la conexion");
		$Query="insert into tipodocs(Sigla, Nombre) values 
			('$_POST[Sigla]','$_POST[TipoDoc]')";
		mysqli_query($conexion,$Query) or die("Problemas en el select".mysqli_error());
		mysqli_close($conexion);
		echo "Documento Registrado.";
	}
	EnvioDoc()
?>