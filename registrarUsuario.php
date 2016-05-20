<?php


//DATOS
$usuario = $_POST["usuario"];

$contra = $_POST["contra"];


//CONEXION
$host = "localhost";
$user = "root";
$pass = "";

$bd = "otarolabd";

$conexion = mysqli_connect($host,$user,$pass,$bd);

//CONSULTA



$peticion = 'INSERT INTO tablitaUsuario (usuario,pass) VALUES("'.$usuario.'","'.$contra.'")';

$resultado = mysqli_query($conexion,$peticion);

header("location:/PHP-Miguel/index.php");


?>