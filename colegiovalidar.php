<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>

	<?php

		$nombre=$_REQUEST['name'];
		$edad=$_REQUEST['edad'];

		$grado = "Ninguno";	

		if ($edad>=6 and $edad<=6) {
			$grado = "Primaria";
		}elseif ($edad>=7 and $edad<=8) {
			$grado = "Secundaria";
		}elseif ($edad>=9 and $edad<=10) {
			$grado="Tecer Grado";
		}elseif ($edad>=11 and $edad<=12) {
			$grado="Cuarto Grado";
		}elseif ($edad>=13) {
			$grado = "Quinto Grado";
		}		

		echo "Bienvenido ";
		echo "".$nombre;
		echo "<br>";
		echo "Grado Permitido: ".$grado;

	?>

	<br>
	<a href="colegio.html"><p>Continuar</p>

</body>
</html>
