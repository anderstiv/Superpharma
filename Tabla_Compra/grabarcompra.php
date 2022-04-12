<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$idcompra=$_POST['txtidcompra'];
$fechexpedicion=$_POST["txtfechexp"];
$fechvencimiento=$_POST["txtfechven"];
$cantidad=$_POST["txtcantidad"];
$referencia=$_POST["txtreferencia"]; 
$unitario=$_POST["txtunitario"];
$valortotal=$_POST["txtvalortotal"];


include(".\conexion.php");

$query = "INSERT INTO compra (id_compra,com_fecha_expedicion,com_fecha_vencimiento,com_cantidad_pro,com_referencia_pro,com_unitario_pro,com_valor_total_pro)
VALUES ('$idcompra','$fechexpedicion','$fechvencimiento','$cantidad','$referencia','$unitario','$valortotal')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexCOM.html';

</script>";

?>

