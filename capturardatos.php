<?php

	$diametro=$_REQUEST['diam'];
	$altura=$_REQUEST['altu'];

	$resultado=$diametro*$altura;

	if(isset($_POST['btnboton']))
	{
		echo "Bienvenido ";
		echo "mi diametro ".$diametro;
		echo "<br>";
		echo "mi altura ".$altura;
		echo "<br>";
		echo "mi Calculo seria ".$resultado;
	}

	if(isset($_REQUEST['btnboton2']))
	{
		echo "Bienvenido ";
		echo "mi diametro ".$diametro;
		echo "<br>";
		echo "mi altura ".$altura;
		echo "<br>";
		echo "mi Calculo seria 2 ".$resultado;
	}

?>