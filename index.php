<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	if(isset($_SESSION["usuarioViviente"]))
	{
		echo "Estás con la cuenta " . $_SESSION["usuarioViviente"];
		echo '<br><a href="cerrarSesion.php">Cerrar sesión</a>';
	}else
	{
		echo "Aun no has iniciado sesión";
		
		if(isset($_GET["mensaje"]))
		{
			echo "<br>";
			echo $_GET["mensaje"];
			echo "<br>";
		}


		echo '

		<form action="procesarLogin.php" method="POST">
		<input type="text" name="usuario">
		<br><br>
		<input type="text" name="pass">
		<br><br>
		<button>Procesar</button>
		</form>
		';
	}

	?>

	<h2>Registro</h2>
	<form action="registrarUsuario.php" method="POST">
		<input type="text" name="usuario">
		<br><br>
		<input type="password" name="contra">
		<br><br>
		<button>Registrarse</button>
	</form>

	<!-- 
		POST = oculta tus datos de la url

		GET = muestra y editar datos de la url
	-->

	
	<br>

</body>
</html>