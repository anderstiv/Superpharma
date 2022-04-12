<script>
function validar(formulario)
{

if(isNaN(formulario.txtcodproducto.value==''))
{
alert('Sr Usuario debe ingresar el codigo del producto');
formulario.txtcodproducto.focus();
formulario.txtcodproducto.value='';
return false;
}

if(formulario.txtnomproducto.value=='')
{
alert('Sr Usuario debe ingresar el nombre del producto');
formulario.txtnomproducto.focus();
return false;
}

if(formulario.txtiva.value=='')
{
alert('Sr Usuario debe ingresar si tiene Iva');
formulario.txtiva.focus();
return false;
}

if(formulario.txtubicacion.value=='')
{
alert('Sr Usuario debe ingresar la ubicación');
formulario.txtubicacion.focus();
return false;
}

if(isNaN(formulario.txtcantidad.value==''))
{
alert('Sr Usuario debe ingresar la cantidad del producto');
formulario.txtcantidad.focus();
formulario.txtcantidad.value='';
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM producto WHERE producto.id_producto =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
	  <tr>
      <td width=50%>CODIGO DEL PRODUCTO</td>
      <td>
        <input name="txtcodproducto" type="number" id="txtcodproducto" size="11" value= "<?php echo $Rs['id_producto'];?>"
      </td>
    </tr>

    <tr>
      <td>NOMBRE DEL PRODUCTO</td>
      <td>
        <input name="txtnomproducto" type="text" id="txtnomproducto" size="45" value= "<?php echo $Rs['pro_nombre'];?>"
      </td>
    </tr>

	<tr>
      <td>IVA</td>
      <td>
        <input name="txtiva" type="text" id="txtiva" size="2" value= "<?php echo $Rs['pro_iva'];?>"
      </td>
    </tr>
	
	  <tr>
      <td>UBICACION</td>
      <td>
        <input name="txtubicacion" type="text" id="txtubicacion" size="10" value= "<?php echo $Rs['pro_ubicacion'];?>"
    </tr>

    <tr>
      <td>CANTIDAD</td>
      <td>
        <input name="txtcantidad" type="number" id="txtcantidad" size="10" value= "<?php echo $Rs['cantidad'];?>"
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

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>