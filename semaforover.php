<!DOCTYPE html>
<html>
<head>
	<title>SEMAFORO</title>
</head>
<body>

	<?php

		$_color = $_REQUEST['color'];

		switch ($_color) {
			case 1:
				echo "VERDE";
				break;
			case 2:
				echo "ROJO";
				break;
			case 3:
				echo "AMARILLO";
				break;
			
			default:
				echo "No ingresado";
				break;
		}

	?>

<br>
<a href="semaforo.html"><p>Continuar</p>

</body>
</html>
