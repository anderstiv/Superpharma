<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "superpharma";
$conexion = mysqli_connect( $server, $user, $pass ) or die ("NO SE HA PODIDO CONECTAR AL SERVIDOR DE BASE DE DATOS");
$basededatos = mysqli_select_db( $conexion, $db ) or die ( "Upps! CARAMBA NO SE HA PODIDO CONECTAR A LA BASE DE DATOS" );
?>
