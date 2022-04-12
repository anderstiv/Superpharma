<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de linea producto</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA LINEA PRODUCTO</h1>
<center>
<table width="900" border="1">
		<tr>
		<td></td>
		<td>ID LINEA</td>
		<td>DESCRIPCION</td>
		</tr>

	<?php
	include(".\conexion.php");
		$query="SELECT linea_producto.id_linea,lin_descripcion
			FROM linea_producto
			order by 1";
			
		//SELECT productos.codigo, productos.nombre, productos.cantidad, productos.valor, umedidas.descripcion
//FROM productos
//INNER JOIN umedidas ON productos.unidad = umedidas.codigo
//ORDER BY 1 	
			
			
			
			
			
		$result=mysql_query($query,$link) or die("error en la consulta de linea producto");
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td>";
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
				var pagina='..indexLIN.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";
	?>
</table>
</body>
</html>