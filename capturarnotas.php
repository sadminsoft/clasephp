<?php

	$_nombre = $_REQUEST['name'];
	$_nota1 = $_REQUEST['nota1'];
	$_nota2 = $_REQUEST['nota2'];
	$_nota3 = $_REQUEST['nota3'];
	$_nota4 = $_REQUEST['nota4'];

	echo "Alumno ".$_nombre;
	echo "<br>";

	echo "Clase 1 ".$_nota1;
	echo "<br>";	
	echo "Clase 2 ".$_nota2;
	echo "<br>";	
	echo "Clase 3 ".$_nota3;
	echo "<br>";	
	echo "Clase 4 ".$_nota4;			
	echo "<br>";

	$_promedio = ($_nota1+$_nota2+$_nota3+$_nota4) / 4;

	echo "Promedio: ".$_promedio;

	if ($_promedio<=60) {
		echo "Reprobado";
	}
	elseif ($_promedio>60) {
		echo "Aprobado";
	}
	

?>