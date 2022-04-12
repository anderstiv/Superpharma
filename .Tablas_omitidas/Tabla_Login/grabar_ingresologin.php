<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtid'];
$ingusuario=$_POST["txtusuario"];
$ingclave=$_POST["txtingclave"]; 
include(".\conexion.php");

$query = "INSERT INTO LOGIN (id_login,ing_usuario,ing_clave)
VALUES ('$id','$ingusuario','$ingclave')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexLOG.html';

</script>";

?>

