<html>
  <head>
  <title>Punto 8</title>
  </head>
  <body>

    <?php

      echo "Tabla del 2 con For";
      echo "<br>";

      for($f=2;$f<=20;$f=$f+2){
        echo $f;
        echo "<br>";
      }

      echo "<br>";
      echo "Tabla del 2 con While";
      echo "<br>";
      $f=2;

      while ($f<=20){
        echo $f;
        echo "<br>";
    	 $f=$f+2;
      }

      echo "<br>";
      echo "Tabla del 2 con Do/While";
      echo "<br>";
      $f=2;

      do{
        echo $f;
        echo "<br>";
    	 $f=$f+2;	
      } 
      while ($f<=20);

    ?>

  </body>
</html>