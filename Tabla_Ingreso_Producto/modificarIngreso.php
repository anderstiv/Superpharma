<script>
function validar(formulario)
{

  if(isNaN(formulario.txtid.value==''))
{
alert('Sr Usuario debe ingresar el id del Ingreso');
formulario.txtid.focus();
formulario.txtid.value='';
return false;
}

if(isNaN(formulario.txtcantproducto.value==''))
{
alert('Sr Usuario debe ingresar la cantidad del producto');
formulario.txtcantproducto.focus();
formulario.txtcantproducto.value='';
return false;
}

if(isNaN(formulario.txtingfechaven.value==''))
{
alert('Sr Usuario debe ingresar la fecha de vencimiento');
formulario.txtingfechaven.focus();
formulario.txtingfechaven.value='';
return false;
}

if(isNAN(formulario.txtprecioentrada.value==''))
{
alert('Sr Usuario debe ingresar el precio de entrada del producto');
formulario.txtprecioentrada.focus();
formulario.txtprecioentrada.value='';
return false;
}

if(isNaN(formulario.txtcodentrada.value==''))
{
alert('Sr Usuario debe ingresar el codigo de entrada');
formulario.txtcodentrada.focus();
formulario.txtcodentrada.value='';
return false;
}

if(isNaN(formulario.txtfechacom.value==''))
{
alert('Sr Usuario debe ingresar la fecha de compra');
formulario.txtfechacom.focus();
formulario.txtfechacom.value='';
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM INGRESO_PRODUCTO WHERE INGRESO_PRODUCTO.id_ingresoprod =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de ingreso. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizaIngreso.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11 readonly="readonly" value= "<?php echo $Rs['id_ingresoprod'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CANTIDAD DEL PRODUCTO</td>
					<td>
						<input name="txtcantproducto" type="number" id="txtcantproducto" size=25 readonly="readonly" value= "<?php echo $Rs['ing_cantidad_producto'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA DE VENCIMIENTO</td>
					<td>
						<input name="txtingfechaven" type="date" id="txtingfechaven" size=11 readonly="readonly" value= "<?php echo $Rs['ing_fecha_vencimiento'];?>"/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE ENTRADA</td>
					<td>
						<input name="txtprecioentrada" type="number" id="txtprecioentrada" size=11 readonly="readonly" value= "<?php echo $Rs['ing_precio_entrada'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CODIGO ENTRADA</td>
					<td>
						<input name="txtcodentrada" type="number" id="txtcodentrada" size=11 readonly="readonly" value= "<?php echo $Rs['ing_codigo_entrada'];?>"/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE COMPRA</td>
					<td>
						<input name="txtfechacom" type="date" id="txtfechacom" size=10 readonly="readonly" value= "<?php echo $Rs['ing_fecha_compra'];?>"/>
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