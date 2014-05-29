<?php
	function Punto3(){
		$value1="Mi nombre es Diana.<br>";
		$value2="Tengo 22 años."
		echo $value1;
		echo $value2;
	}

	function Punto4(){
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
	}

	function Punto5(){
		$edad=22;
		$peso=56.6;
		$nombre="Diana";
		$existe=true;
		echo "Variable integer:";
		echo $edad;
		echo "<br>";
		echo "Variable double:";
		echo $peso;
		echo "<br>";  
		echo "Variable string:";
		echo $nombre;
		echo "<br>";
		echo "Variable boolean:";
		echo $existe;
	}

	function Punto6(){
		$nota1=10;
		$nota2=7;
		$nota3=8;
		echo "El alumno aprobo la materia con las notas $nota1, $nota2 y $nota3";
	}


	function Punto7(){
		$num=rand(1,3);
		if ($num==1){
			echo "uno";
		}
		else if($num==2){
			echo "dos";
		}
		else{
			echo "tres";
		}
	}

	
	function Punto8(){
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
	}

	function Punto9(){
		echo $_REQUEST['nombre'];
		echo "<br>";
		if ($_REQUEST['edad']>=18){
			echo "Es mayor de edad";
		}
		else{
			echo "No es mayor de edad";
		}
	}
?>	