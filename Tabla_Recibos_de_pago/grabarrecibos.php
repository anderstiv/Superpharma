<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtrecid'];
$valortotal=$_POST["txtrecvaltol"]; 
$subtotal=$_POST["txtrecsub"]; 
$fechaemision=$_POST["txtrecfecemi"];
$cantidadpro=$_POST["txtreccanpro"];
$descuento=$_POST["txtrecdes"];
$formapago=$_POST["txtrecforpag"];

include(".\conexion.php");

$query = "INSERT INTO RECIBO_PAGO (id_recibo,rec_valor_total_recibo,rec_subtotal,rec_fecha_emision,rec_cantidad_producto,rec_descuento,rec_forma_pago) 
VALUES ('$id','$valortotal','$subtotal','$fechaemision','$cantidadpro','$descuento','$formapago')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexREC.html';

</script>";

?>

