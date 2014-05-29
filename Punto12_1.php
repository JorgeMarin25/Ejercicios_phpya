<html>
<head>
<title>Punto 12.1</title>
</head>
	<body>

		<?php
			echo $_REQUEST['nombre'];
			if ($_REQUEST['ingresos']==3){
				echo " debe pagar impuestos.";
			}
			else{
				echo " no debe pagar impuestos a las ganancias.";	
			}

		?>

	</body>
</html>

