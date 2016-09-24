<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2 clase 5</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/clasephp.css">	
</head>
<body>

	<?php

		$continuar = false;

		include "clases.php";

		$cedu = $_POST["cedula"];		
		$name = $_POST["nombre"];
		$apel = $_POST["apellido"];
		$edad = $_POST["edad"];
		$clave = $_POST["clave"];


		// Validar si se presiono el boton enviar
		if(isset($_POST["enviar"]))
		{							
			$cabecera=new CabeceraPagina($cedu,$name,$apel,$edad,$clave);			
			if ($cabecera->validarclave()) {
				$continuar = true;
			}elseif (!$cabecera->validarclave()) {
				$continuar=false;
			}
		}


	?>

	<div class="rows">

	<div class="col-sm-4">

		<h2>INGRESO DE FORMULARIOS</h2>

		<form name="persona" action="Ejemplo.php" method="POST">
			
			CEDULA   : <input type="text" name="cedula" value="">	
			<br>	
			NOMBRE   : <input type="text" name="nombre" value="">
			<br>
			Apellido : <input type="text" name="apellido" value="">
			<br>
			EDAD     : <input type="text" name="edad" value="">
			<br>
			PASSWORD : <input type="password" name="clave" value="">
			<br>
			<input type="submit" name="enviar" value="enviar" class="btn-info">

		</form>

	</div>

	<div class="col-sm-4">
		<br>
		RESULTADO
		<br>	
		<?php 
			if ($continuar) {
				echo $cabecera->ver();
			}elseif (!$continuar) {
				echo "Clave es incorrecta";
			}
		?>
	</div>

	</div>

</body>
</html>
