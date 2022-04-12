<?php

$host="localhost";
$user="root";
$password="";

$link = mysqli_connect($host,$user,$password) or die ("Error al conectarse al servidor");

$dbname="login";

mysqli_select_db($link,$dbname) or die ("Error al conectarse a la Bd");


return $link;


?>