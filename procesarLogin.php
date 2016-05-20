<?php

//DATOS
$usuario = $_POST["usuario"];

$contra = $_POST["pass"];

//CONEXION
$host = "localhost";
$user = "root";
$pass = "";

$bd = "otarolabd";

$conexion = mysqli_connect($host,$user,$pass,$bd);

//CONSULTA
$consulta = "SELECT * FROM tablitaUsuario WHERE usuario = '".$usuario."' AND pass = '".$contra."'  ";

$seleccion = mysqli_query($conexion,$consulta);

if($array = mysqli_fetch_array($seleccion)){

	echo "Bievenido ".$array["usuario"];
	echo "<br>";
	echo "Tu pass es ".$array["pass"];

	Session_start();
	$_SESSION["usuarioViviente"] = $array["usuario"];

	header("location:/PHP-Miguel/index.php");

}else
{
	header("location:/PHP-Miguel/index.php?mensaje=Esta mal");
}



?>