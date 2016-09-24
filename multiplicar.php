<!DOCTYPE html>
<html>
<head>
	<title>Tabla Multiplicar</title>
</head>
<body>

<?php

	$_num1 = $_REQUEST['numero'];

	$ide = 1;

	while($ide<=10){

		$factor = $ide * $_num1;
		$cadena = $_num1." x ".$ide;

		echo $cadena;
		echo " = ".$factor;
		echo "<br>";

		$ide += 1;					

	}			

?>

<br>
<a href="calculos.html"><p>Continuar</p>
</body>
</html>
