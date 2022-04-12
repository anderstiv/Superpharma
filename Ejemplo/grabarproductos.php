<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$codigo=$_POST['txtcodigo'];
$nombre=$_POST["txtnombre"];
$cantidad=$_POST["txtcantidad"]; 
$valor=$_POST["txtvalor"]; 
$medida=$_POST["cmbumedidads"];

echo "la medidA ES " , var_dump($medida);


include("..\conexion.php");

$query = "INSERT INTO productos (codigo , nombre , cantidad,  valor ,unidad)
VALUES ('$codigo','$nombre', '$cantidad' , '$valor','$medida')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

