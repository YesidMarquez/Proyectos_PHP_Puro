<?php

$server='127.0.0.1';
$user='yesid_marquez';
$pass='Matias.2014';

$bd='matsw_copasst';
$mysqli= new mysqli($server,$user,$pass,$bd);
//Si hay conexion no entra mal if
if($mysqli->connect_error){
	dir('Error en la conexion'.$mysqli->connect_error);
}	

//printf("Sevidor informacion: %s\n", $mysqli->server_info);

?>