<html>
<head>
<title>Punto 21.1</title>
</head>
<body>
<?php
  $conexion=mysql_connect("localhost","root","") or
    die("Problemas en la conexion");

	mysql_select_db("Base1",$conexion) or
    die("Problemas en la seleccion de la base de datos");

  mysql_query("insert into Cursos(Nombre) values ('$_REQUEST[Nombre]')", $conexion) or
    die("Problemas en el select".mysql_error());
  
  mysql_close($conexion);

  echo "El curso fue dado de alta.";
?>
</body>
</html>

