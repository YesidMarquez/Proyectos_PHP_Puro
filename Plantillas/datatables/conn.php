<?php
$db_host = "127.0.0.1";
$db_user = "yesid_marquez";
$db_pass = "Matias.2014";
$db_name = "confronta_becall";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Error, no se pudo conectar a la base de datos: '.mysqli_connect_error();
} 

$server='127.0.0.1';
$user='yesid_marquez';
$pass='Matias.2014';

$bd='confronta_becall';
$mysqli= new mysqli($server,$user,$pass,$bd);
//Si hay conexion no entra mal if
mysqli_set_charset($mysqli,'utf8');
if($mysqli->connect_error){
	dir('Error en la conexion'.$mysqli->connect_error);
}	

//printf("Sevidor informacion: %s\n", $mysqli->server_info);
  
?>