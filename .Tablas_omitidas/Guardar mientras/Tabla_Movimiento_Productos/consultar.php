<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consultar por movimiento de productos</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA DE MOVIMIENTOS DE PRODUCTOS</h1>
<center>
<table width="900" border="1">
	<tr>
		<td>ID</td>
		<td>EXISTENCIA</td>
		<td>PRECIO DE VENTA</td>
		<td>SALDO</td>
		<td>PRECIO COMPRA<td>
	</tr>
	
	<?php
		include(".\conexion.php");
		$query= "SELECT movimiento_producto.id_movimiento,mov_existencia,mov_precio_venta,mov_saldo,mov_precio_compra
				FROM movimiento_producto		
				order by 1";
		// en la linea 27 en el query se ponen los nombres de las tablas que estan en la base de datos
		$result=mysqli_query($link,$query) or die("error en la consulta de movimiento de productos");
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";
				  
			echo "</tr>";
			}
		}
		else
		{
			echo"La consulta no encontro registros asociados";
		}

		echo " <script>
			function redireccionar()
			{
				var pagina='../indexMOV.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";
	?>
</table>
</body>
</html>
