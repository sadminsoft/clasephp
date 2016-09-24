
</!DOCTYPE html>
<html>
<head>
	<title>Resultado Parque Infantil</title>
</head>
<body>

<?php

	$_estatura=$_REQUEST['estatura'];

	if ($_estatura>=1.0 and $_estatura<=1.50) {
		echo "Ingreso satisfactorio";
	}elseif ($_estatura<1.0 || $_estatura>1.50) {
		echo "Ingreso denegado";
	}

?>

<br>
<a href="parque.html"><p>Continuar</p>

</body>
</html>