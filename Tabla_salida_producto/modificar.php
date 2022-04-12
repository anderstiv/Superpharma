<script>
function validar(formulario)
{

  if (isNaN(formulario.txtid.value==''))
{
alert('Sr Usuario debe ingresar el id de la salida');
formulario.txtid.focus();
formulario.txtid.value='';
return false;
}

if(isNaN(formulario.txtfechasal.value==''))
{
alert('Sr Usuario debe ingresar la fecha de la salida');
formulario.txtfechasal.focus();
formulario.txtfechasal.value='';
return false;
}

if(isNaN(formulario.txtsalcantidad.value==''))
{
alert('Sr Usuario debe ingresar la cantidad del productos salientes');
formulario.txtsalcantidad.focus();
formulario.txtsalcantidad.value='';
return false;
}

if(isNaN(formulario.txtpreciosal.value==''))
{
alert('Sr Usuario debe ingresar el precio de salida');
formulario.txtpreciosal.focus();
formulario.txtpreciosal.value='';
return false;
}

if(isNAN(formulario.txtprecioventa.value==''))
{
alert('Sr Usuario debe ingresar el precio de venta');
formulario.txtprecioventa.focus();
formulario.txtprecioventa.value='';
return false;
}

if(formulario.txtfechaven.value=='')
{
alert('Sr Usuario debe ingresar la fecha de venta');
formulario.txtfechaven.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM SALIDA_PRODUCTO WHERE SALIDA_PRODUCTO.id_salida =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de salida. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizasalida.php">
				
	  <table width="400" border="1">
	   		 <tr>
     			 <td width=50%>ID</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11 value= "<?php echo $Rs['id_salida'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA DE SALIDA</td>
					<td>
						<input name="txtfechasal" type="date" id="txtfechasal" size=45 value= "<?php echo $Rs['sal_fecha_salida'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CANTIDAD</td>
					<td>
						<input name="txtsalcantidad" type="number" id="txtsalcantidad" size=25 value= "<?php echo $Rs['sal_cantidad'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>PRECIO DE SALIDA/td>
					<td>
						<input name="txtpreciosal" type="number" id="txtpreciosal" size=11 value= "<?php echo $Rs['sal_precio_salida'];?>"/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE VENTA</td>
					<td>
						<input name="txtprecioventa" type="number" id="txtprecioventa" size=11 value= "<?php echo $Rs['sal_precio_venta'];?>"/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE VENTA</td>
					<td>
						<input name="txtfechaven" type="date" id="txtfechaven" size=11 value= "<?php echo $Rs['sal_fecha_venta'];?>"/>
					</td>
				</tr>
		
    <tr>
      <td>

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

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>