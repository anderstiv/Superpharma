<script>
function validar(formulario)
{

if(isNaN(formulario.txtmovid.value==''))
{
alert('Sr Usuario debe ingresar el id del movimiento');
formulario.txtmovid.focus();
formulario.txtmovid.value='';
return false;
}

if(isNaN(formulario.txtmovexi.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtmovexi.focus();
formulario.txtmovexi.value='';
return false;
}

if(isNaN(formulario.txtmovpreven.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtmovpreven.focus();
formulario.txtmovpreven.value='';
return false;
}

if(isNaN(formulario.txtmovsal.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtmovsal.focus();
formulario.txtmovsal.value='';
return false;
}

if(isNaN(formulario.txtmovprecom.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtmovprecom.focus();
formulario.txtmovprecom.value='';
return false;
}
}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM movimiento_producto WHERE movimiento_producto.id_movimiento =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de movimiento de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
	?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
		<tr>
      		<td width=50%>ID DEL MOVIMIENTO DEL PRODUCTO</td>
      		<td>
       		<input name="txtmovid" type="number" id="txtmovid" size="11" value= "<?php echo $Rs['id_movimiento'];?>"
      		</td>
    	</tr>
   
		<tr>
      		<td>EXISTENCIA</td>
     		<td>
        		<input name="txtmovexi" type="number" id="txtmovexi" size="11" value= "<?php echo $Rs['mov_existencia'];?>"
			</td>
   		</tr>
		
 		 <tr>
			<td>PRECIO DE VENTA</td>
			<td>
				<input name="txtmovprevent" type="number" id="txtmovprevent" size="10" value= "<?php echo $Rs['mov_precio_venta'];?>"/>
			</td>
		</tr>
				
  		<tr>
			<td>SALDO</td>
			<td>
				<input name="txtmovsal" type="number" id="txtmovsal" size="10" value= "<?php echo $Rs['mov_saldo'];?>"/>
			</td>
		</tr>

		<tr>
			<td>PRECIO COMPRA</td>
			<td>
				<input name="txtmovprecom" type="number" id="txtmovprecom" size="10" value= "<?php echo $Rs['mov_precio_compra'];?>"/>
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

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>