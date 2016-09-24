<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>

	<?php

		$nombre=$_REQUEST['name'];
		$zona=$_REQUEST['zona'];

		$comision = "0%";	

		switch ($zona) {
			case 1:
				$comision = "10%";
				break;
			case 2:
				$comision = "15%";
				break;
			case 3:
				$comision = "20%";
				break;
			case 4:
				$comision = "25%";
				break;
			case 5:
				$comision = "30%";
				break;			
			default:
				$comision = "0%";
				break;
		}

		echo "El vendedor: ";
		echo "".$nombre;
		echo "<br>";
		echo "Con Zona: ".$zona;
		echo "<br>";
		echo "Se le pagara una comision del ".$comision;

	?>

	<br>
	<a href="comision.html"><p>Continuar</p>

</body>
</html>
