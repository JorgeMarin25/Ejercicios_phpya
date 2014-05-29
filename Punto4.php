<html>
  <head>
  <title>Punto 4</title>
  </head>
  <body>

    <?php
      $num=rand(1,100);
      echo $num;
      echo "<br>";
      if ($num<50)  {
        echo "El Numero es Menor que 50.";
      }
      else if ($num>50)  {
        echo "El Numero es Mayor a 50.";  
      }
      else{
        echo "El Numero es Igual a 50";
      }

    ?>

  </body>
</html>