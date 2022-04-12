<?php
include(".\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM COMPRA WHERE id_compra = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de compra. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualiza.php">
				<table width=400 border=1>
				<tr>
				<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
				</td>
				</tr>
				
				<tr>
					<td width=50%>ID COMPRA</td>
					<td>
						<input name="txtidcompra" type="number" id="txtidcompra" size=11 readonly="readonly" value= "<?php echo $Rs['id_compra'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA EXPEDICION</td>
					<td>
						<input name="txtfechexp" type="date" id="txtfechexp" size=10 readonly="readonly" value= "<?php echo $Rs['com_fecha_expedicion'];?>"/>
					</td>
				</tr>	

				<tr>
					<td>FECHA VENCIMIENTO</td>
					<td>
						<input name="txtfechven" type="date" id="txtfechven" size=45 readonly="readonly" value= "<?php echo $Rs['com_fecha_vencimiento'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CANTIDAD</td>
					<td>
						<input name="txtcantidad" type="number" id="txtcantidad" size=10 readonly="readonly" value= "<?php echo $Rs['com_cantidad_pro'];?>"/>
					</td>
				</tr>

				<tr>
					<td>REFERENCIA</td>
					<td>
						<input name="txtreferencia" type="text" id="txtreferencia" size=25 readonly="readonly" value= "<?php echo $Rs['com_referencia_pro'];?>"/>
					</td>
				</tr>

				<tr>
					<td>UNITARIO</td>
					<td>
						<input name="txtunitario" type="number" id="txtunitario" size=11 readonly="readonly" value= "<?php echo $Rs['com_unitario_pro'];?>"/>
					</td>
				</tr>

				<tr>
					<td>VALOR TOTAL</td>
					<td>
						<input name="txtvalortotal" type="number" id="txtvalortotal" size=11 readonly="readonly" value= "<?php echo $Rs['com_valor_total_pro'];?>"/>
					</td>
				</tr>

				
										
			<tr>
				  <td>
					<center>
						<input type="submit" name="Submit" value="Enviar" />
					</center>
				  </td>
				  <td>
					<center>
						<input type="reset" name="Submit2" value="Restablecer" />
					</center>
				  </td>
				</tr>
			
				</table>
					
				<input type="hidden" name="Accion" value="Delete" />
				
			</form>
			</center>
			<?php
		}
	}
	mysqli_close($link);
?>