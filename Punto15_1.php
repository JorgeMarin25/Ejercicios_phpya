<html>
<head>
<title>Punto15.1</title>
</head>
  <body>

      <?php
        $ar=fopen("lista.txt","w") or
          die("Problemas en la creacion");
        fputs($ar,"Nombre:");
        fputs($ar,$_REQUEST['Nombre']);
        fputs($ar,"\n");
        fputs($ar,"Direccion:");
        fputs($ar,$_REQUEST['Direccion']);
        fputs($ar,"\n");

        if (isset($_REQUEST['Jamon'])){
          fputs($ar,"Cantidad de Jamon y Queso:");
          fputs($ar,$_REQUEST['CJamon']);
          fputs($ar,"\n");  
        }

        if (isset($_REQUEST['Np'])){
          fputs($ar,"Cantidad de Napo:");
          fputs($ar,$_REQUEST['CNp']);
          fputs($ar,"\n");  
        }

        if (isset($_REQUEST['Mz'])){
          fputs($ar,"Cantidad de Mozzarella:");
          fputs($ar,$_REQUEST['CMz']);
          fputs($ar,"\n");  
        }

        fputs($ar,"--------------------------------------------------------");
        fputs($ar,"\n");
        fclose($ar);
        echo "El pedido se cargo correctamente.";
      ?>

  </body>
</html>