<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de Compra</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA COMPRA</h1>
<center>
<table width="900" border="1">
	<tr>
	<td></td>
		<td>ID COMPRA</td>
		<td>FECHA EXPEDICION</td>
		<td>FECHA VENCIMIENTO</td>
		<td>CANTIDAD</td>
		<td>REFERENCIA</td>
		<td>UNITARIO</td>
		<td>VALOR TOTAL</td>
	</tr>

	<?php
	include(".\conexion.php");
		$query="SELECT compra.id_compra,com_fecha_expedicion,com_fecha_vencimiento,com_cantidad_pro,com_referencia_pro,com_unitario_pro,com_valor_total_pro
			FROM compra
			order by 1";
			
		//SELECT productos.codigo, productos.nombre, productos.cantidad, productos.valor, umedidas.descripcion
//FROM productos
//INNER JOIN umedidas ON productos.unidad = umedidas.codigo
//ORDER BY 1 	
			
			
			
			
			
		$result=mysql_query($query,$link) or die("error en la consulta de compras");
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
				  <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>";
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
				var pagina='..indexCOM.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";
	?>
</table>
</body>
</html>