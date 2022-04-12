<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtcliid'];
$clitipodoc=$_POST["txtclidocumento"];
$clinombre=$_POST["txtclinombre"]; 
$clitelefono=$_POST["txtclitel"];
$clidireccion=$_POST["txtclidireccion"];
$clicorreo=$_POST["txtclicorreo"];
$clientefechanac=$_POST["txtclifechanac"];

include(".\conexion.php");

$query = "INSERT INTO CLIENTE (id_cliente,cli_tipo_documento,cli_nombre,cli_telefono,cli_direccion,cli_correo,cli_fecha_nacimiento)
VALUES ('$id','$clitipodoc','$clinombre','$clitelefono','$clidireccion','$clicorreo','$clientefechanac')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexCLI.html';

</script>";

?>

