<script>
function validar(formulario)
{

if(isNaN(formulario.txtidcompra.value==''))
{
alert('Sr Usuario debe ingresar el codigo de la compra');
formulario.txtidcompra.focus();
formulario.txtidcompra.value='';
return false;
}

if(formulario.txtfechexp.value=='')
{
alert('Sr Usuario debe ingresar la fecha de expedicion');
formulario.txtfechexp.focus();
return false;
}

if(isNaN(formulario.txtfechven.value==''))
{
alert("Sr usuario ingrese la fecha de vencimiento");
formulario.txtfechven.focus();
formulario.txtfechven.value='';
return false;
}

if(isNaN(formulario.txtcantidad.value==''))
{
alert('Sr Usuario debe ingresar la cantidad');
formulario.txtcantidad.focus();
formulario.txtcantidad.value='';
return false;
}

if(formulario.txtreferencia.value=='')
{
alert('Sr Usuario debe ingresar la referencia de la compra');
formulario.txtreferencia.focus();
return false;
}

if(isNaN(formulario.txtunitario.value==''))
{
alert('Sr Usuario debe ingresar el precio unitario');
formulario.txtunitario.focus();
formulario.txtunitario.value='';
return false;
}

if(isNaN(formulario.txtvalortotal.value==''))
{
alert('Sr Usuario debe ingresar el valor total');
formulario.txtvalortotal.focus();
formulario.txtvalortotal.value='';
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM compra WHERE compra.id_compra =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de compra. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID COMPRA</td>
      <td>
        <input name="txtidcompra" type="number" id="txtidcompra" size="11" value= "<?php echo $Rs['id_compra'];?>"
      </td>
    </tr>
    <tr>
      <td>FECHA EXPEDICION</td>
      <td>
        <input name="txtfechexp" type="date" id="txtfechexp" size="10" value= "<?php echo $Rs['com_fecha_expedicion'];?>"
    </tr>
    <tr>
      <td>FECHA VENCIMIENTO</td>
      <td>
        <input name="txtfechven" type="date" id="txtfechven" size="45" value= "<?php echo $Rs['com_fecha_vencimiento'];?>"
      </td>
    </tr>
    <tr>
      <td>CANTIDAD</td>
      <td>
        <input name="txtcantidad" type="number" id="txtcantidad" size="10" value= "<?php echo $Rs['com_cantidad_pro'];?>"
    </tr>
	  <tr>
      <td>REFERENCIA</td>
      <td>
        <input name="txtreferencia" type="number" id="txtreferencia" size="2" value= "<?php echo $Rs['com_referencia_pro'];?>"
      </td>
    </tr>
    <tr>
      <td>UNITARIO</td>
      <td>
        <input name="txtunitario" type="number" id="txtunitario" size="11" value= "<?php echo $Rs['com_unitario_pro'];?>"
    </tr>	
	  <tr>
      <td>VALOR TOTAL</td>
      <td>
        <input name="txtvalortotal" type="number" id="txtvalortotal" size="11" value= "<?php echo $Rs['com_valor_total_pro'];?>"
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