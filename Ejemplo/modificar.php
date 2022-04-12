<script>
function validar(formulario)
{

if(formulario.txtcodigo.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.txtcodigo.focus();
return false;
}
else if (isNaN(formulario.txtcodigo.value))
{
alert("El codigo ingresado no es un número");
formulario.txtcodigo.focus();
return false;
}

if(formulario.txtnombre.value=='')
{
alert('Sr Usuario debe ingresar el(los) nombre(s)');
formulario.txtnombre.focus();
return false;
}

return true;
}
</script>

<?php
	include("..\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM productos WHERE productos.codigo =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>CODIGO</td>
      <td>
        <input name="txtcodigo" type="text" id="txtcodigo" size="5" value= "<?php echo $Rs['codigo'];?>"
      </td>
    </tr>
    <tr>
      <td>DESCRIPCION</td>
      <td>
        <input name="txtnombre" type="text" id="txtnombre" size="30" value= "<?php echo $Rs['nombre'];?>"
      </td>
    </tr>
	<tr>
      <td>CANTIDAD</td>
      <td>
        <input name="txtcantidad" type="text" id="txtcantidad" size="5" value= "<?php echo $Rs['cantidad'];?>"
      </td>
    </tr>
	<tr>
      <td>VALOR</td>
      <td>
        <input name="txtvalor" type="text" id="txtvalor" size="12" value= "<?php echo $Rs['valor'];?>"
    </tr>
	

    <tr>
    
      <td>UNIDAD DE MEDIDA</td>
      <td> <?php
		include("..\conexion.php");
		$query="select codigo , descripcion from umedidas";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbumedidads'>";
		 echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['codigo'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?>
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