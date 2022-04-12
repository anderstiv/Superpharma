<script>
function validar(formulario)
{

if(isNaN(formulario.txtrecid.value==''))
{
alert('Sr Usuario debe ingresar el id del recibo de pago');
formulario.txtrecid.focus();
formulario.txtrecid.value='';
return false;
}

if(isNaN(formulario.txtrecvaltol.value==''))
{
alert('Sr Usuario debe ingresar valor total');
formulario.txtrecvaltol.focus();
formulario.txtrecvaltol.value='';
return false;
}

if(isNaN(formulario.txtrecsub.value==''))
{
alert('Sr Usuario debe ingresar el subtotal');
formulario.txtrecsub.focus();
formulario.txtrecsub.value='';
return false;
}

if(formulario.txtrecfecemi.value=='')
{
alert('Sr Usuario debe ingresar la fecha de emision');
formulario.txtrecfecemi.focus();
return false;
}

if(isNaN(formulario.txtreccanpro.value==''))
{
alert('Sr Usuario debe ingresar la cantidad de productos');
formulario.txtreccanpro.focus();
formulario.txtrecanpro.value='';
return false;
}

if(isNaN(formulario.txtrecdes.value==''))
{
alert('Sr Usuario debe ingresar el descuento');
formulario.txtrecdes.focus();
formulario.txtrecdes.value='';
return false;
}

if(formulario.txtrecforpag.value=='')
{
alert('Sr Usuario debe ingresar la forma de pago');
formulario.txtrecforpag.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM RECIBO_PAGO WHERE RECIBO_PAGO.id_recibo =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de recibos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID DEL RECIBO</td>
      <td>
        <input name="txtidrecid" type="number" id="txtidrecid" size="11" value= "<?php echo $Rs['id_recibo'];?>"
      </td>
    </tr>
  
	<tr>
      <td>VALOR TOTAL</td>
      <td>
        <input name="txtrecvaltol" type="number" id="txtrecvaltol" size="2" value= "<?php echo $Rs['rec_valor_total_recibo'];?>"
      </td>
    </tr>

	<tr>
      <td>SUBTOTAL</td>
      <td>
        <input name="txtrecsub" type="number" id="txtrecsub" size="11" value= "<?php echo $Rs['rec_subtotal'];?>"
    </tr>
    
	<tr>
      <td>FECHA DE EMISION</td>
      <td>
        <input name="txtrecfecemi" type="date" id="txtrecfecemi" size="11" value= "<?php echo $Rs['rec_fecha_emision'];?>"
    </tr>	
    
	<tr>
      <td>CANTIDAD DE PRODUCTOS</td>
      <td>
        <input name="txtreccanpro" type="number" id="txtreccanpro" size="10" value= "<?php echo $Rs['rec_cantidad_producto'];?>"
    </tr>

    <tr>
      <td>DESCUENTO</td>
      <td>
        <input name="txtrecdes" type="number" id="txtrecdes" size="10" value= "<?php echo $Rs['rec_descuento'];?>"
    </tr>

    <tr>
      <td>FORMA DE PAGO</td>
      <td>
        <input name="txtrecforpag" type="text" id="txtrecforpag" size="10" value= "<?php echo $Rs['rec_forma_pago'];?>"
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