<!DOCTYPE html>
<html>
<head>
	<title>Registro de Datos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/clasephp.css">
</head>
<body>

	<?php

		$name = "";
		$menu = 0;

		include "objclases.php";

		$name = $_POST["name"];
		$edad = $_POST["edad"];
		$ingreso = $_POST["ingreso"];

		$empresa = $_POST["empresa"];
		$representante = $_POST["representante"];
		$direc = $_POST["direc"];
		$ciudad = $_POST["ciudad"];
		$empleado = $_POST["empleado"];
		$diremp = $_POST["diremp"];								

		$email = $_POST["email"];								
		$pasw1 = $_POST["pasw1"];								
		$pasw2 = $_POST["pasw2"];		

		$usuario = $_POST["usuario"];								
		$pasw3 = $_POST["pasw3"];															

		$palabra = $_POST["palabra"];								

		$prueba_clase = new Prueba($name,$edad,$ingreso,$empresa,$representante,$direc,$ciudad,$empleado,$diremp,$email,$pasw1,$pasw2,$palabra,$usuario,$pasw3);	

		// Validar si se presiono el boton enviar
		if(isset($_POST["enviar1"]))
		{							
			$menu =1;

		}

		// Validar si se presiono el boton enviar
		if(isset($_POST["enviar2"]))
		{							
			$menu=2;
		}

		// Validar si se presiono el boton enviar
		if(isset($_POST["enviar3"]))
		{							
			$menu=3;
		}

		// Validar si se presiono el boton enviar
		if(isset($_POST["enviar4"]))
		{							
			$menu=4;
		}

		// Validar si se presiono el boton enviar
		if(isset($_POST["enviar5"]))
		{							
			$menu=5;
		}

		// Validar si se presiono el boton enviar
		if(isset($_POST["enviarlogin"]))
		{							
			$menu=6;
		}

	?>


	<div class="row" id="maqueta">
		<center><img src="img/banner.jpg" class="imgalt"></center>		
	</div>
	<div class="row" id="maqueta">
		<h2 class="color">Clase: PHP Registro de Datos</h2>	
		<h4 class="colorx">Maquetacion</h4>	
	</div>
	<div class="row" id="maqueta2">
		<div class="col-sm-3">
			<nav>
				<ul>
					<a href="index.php"><p>INICIO</p>				
					<a href="datos.php"><p>DATOS</p>
					<a href="calcular.php"><p>CALCULAR</p>
					<a href="galeria.php"><p>GALERIA</p>	
					<a href="formulario.html"><p>FORMULARIO</p>				
					<a href="promedios.html"><p>CALIFICACIONES</p>											
					<a href="parque.html"><p>PARQUE INFANTIL</p>	
					<a href="colegio.html"><p>COLEGIO</p>	
					<a href="comision.html"><p>COMISION</p>															
					<a href="factorial.php"><p>FACTORIAL</p>	
					<a href="semaforo.html"><p>SEMAFORO</p>	
					<a href="calculos.html"><p>CALCULOS</p>	
					<a href="matricez.php"><p>MATRICES</p>	
					<a href="funciones.php"><p>FUNCIONES</p>						
					<a href="clases.php"><p>OBJETOS CLASES</p>											
					<a href="ejemplo.php"><p>OBJETOS CLASES 2</p>
					<a href="prueba2.php"><p>PRUEBA CLASES 3</p>		
				</ul>
			</nav>
		</div>
		<div class="col-sm-6">

		<h3>Ejercicio 1</h3>
			<form class="form-inline" action="prueba2.php" method="POST">		
				<div class="form-group">
					Nombre:<input type="text" class="form-control" name="name" placeholder="text input">
					<br>
					Edad:<input type="text" class="form-control" name="edad" placeholder="0">
					<br>
					<button type="submit" name="enviar1" class="btnbtn-default">Confirmar</button>
				</div>
			</form>

		<h3>Ejercicio 2</h3>

			<form class="form-inline" action="prueba2.php" method="POST">		
				<div class="form-group">
					Nombre:<input type="text" class="form-control" name="name" placeholder="text input">
					<br>
					Edad:<input type="text" class="form-control" name="ingreso" placeholder="0">
					<br>
					<button type="submit" name="enviar2" class="btnbtn-default">Confirmar</button>
				</div>
			</form>

		<h3>Ejercicio 3</h3>

			<form class="form-inline" action="prueba2.php" method="POST">		
				<div class="form-group">
					Empresa:<input type="text" class="form-control" name="empresa" placeholder="text input">
					<br>
					Representante:<input type="text" class="form-control" name="representante" placeholder="text input">
					<br>
					Direccion:<input type="text" class="form-control" name="direc" placeholder="text input">
					<br>
					Ciudad Actual:<input type="text" class="form-control" name="ciudad" placeholder="text input">
					<br>
					Nombre del Empleado:<input type="text" class="form-control" name="empleado" placeholder="text input">
					<br>
					Direccion Empleado:<input type="text" class="form-control" name="diremp" placeholder="text input">
					<br>
					<button type="submit" name="enviar3" class="btnbtn-default">Confirmar</button>
				</div>
			</form>

		<h3>Ejercicio 4</h3>

			<form class="form-inline" action="prueba2.php" method="POST">		
				<div class="form-group">
					Nombre:<input type="text" class="form-control" name="name" placeholder="text input">
					<br>
					Email:<input type="text" class="form-control" name="email" placeholder="text input">
					<br>
					Ingrese Contraseña:<input type="password" class="form-control" name="pasw1" placeholder="password">
					<br>
					Confirmar Contraseña:<input type="password" class="form-control" name="pasw2" placeholder="password">
					<br>
					<button type="submit" name="enviar4" class="btn-default">Registrar Usuario</button>
					<br>
					<p>Login</p>
					Ingrese usuario:<input type="text" class="form-control" name="usuario" placeholder="text input">
					Ingrese Contraseña:<input type="password" class="form-control" name="pasw3" placeholder="password">
					<br>
					<button type="submit" name="enviarlogin" class="btn-default">Login</button>
				</div>
			</form>

		<h3>Ejercicio 5</h3>

			<form class="form-inline" action="prueba2.php" method="POST">		
				<div class="form-group">
					Palabra:<input type="text" class="form-control" name="palabra" placeholder="text input">
					<br>
					<button type="submit" name="enviar5" class="btnbtn-default">Confirmar</button>
				</div>
			</form>

		</div>	

		<div class="col-sm-3">
		<h1>Resultados</h1>

			<?php
				echo "Resultado:";
				echo "<br>";

				switch ($menu) {
					case 1:
						echo "ejemplo 1";
						$prueba_clase->example1();
						break;

					case 2:
						echo "ejemplo 2";
						$prueba_clase->example2();
						break;
					case 3:
						echo "ejemplo 3";
						$prueba_clase->example3();
						break;
					case 4:
						echo "ejemplo 4";
						$prueba_clase->example4();
						break;				
					case 6:
						echo "ejemplo 4";
						$prueba_clase->example6();
						break;										
					default:
						echo "ejemplo 5";
						$prueba_clase->example5();
						break;
				}

			?>


		</div>

	</div>
</body>
<div class="row">
	<p class="color2">Jose lopez 2016</p>
</div>
</html>
