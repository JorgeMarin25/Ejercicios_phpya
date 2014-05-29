<html>
  <head>
  <title>Punto 9.1</title>
  </head>
  <body>

    <?php
      echo $_REQUEST['nombre'];
      echo "<br>";
      if ($_REQUEST['edad']>=18){
        echo "Es mayor de edad";
      }
      else{
        echo "No es mayor de edad";
      }
    ?>

  </body>
</html>