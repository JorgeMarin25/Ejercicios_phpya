<html>
<head>
<title>Punto 16</title>
</head>
<body>

<?php
$ar=fopen("lista.txt","r") or
  die("No se pudo abrir el archivo");
while (!feof($ar))
{
  $linea=fgets($ar);
  $lineasalto=nl2br($linea);
  echo $lineasalto;
}
fclose($ar);
?>

</body>
</html>

