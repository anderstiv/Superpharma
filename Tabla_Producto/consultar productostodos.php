<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de Productos</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA PRODUCTOS</h1>
<center>
<table width="900" border="1">
	<tr>
		<td>ID</td>
		<td>NOMBRE</td>
		<td>IVA</td>
		<td>UBICACION</td>
		<td>CANTIDAD</td>
	</tr>

	<?php
	include(".\conexion.php");
		$query="SELECT producto.id_producto,pro_nombre.pro_iva,pro_ubicacion,cantidad
			FROM producto
			order by 1";
			
		//SELECT productos.codigo, productos.nombre, productos.cantidad, productos.valor, umedidas.descripcion
//FROM productos
//INNER JOIN umedidas ON productos.unidad = umedidas.codigo
//ORDER BY 1 	
			
			
		$result=mysql_query($query,$link) or die("error en la consulta de productos");
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
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
				var pagina='indexPRO.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";
	?>
</table>
</body>
</html>