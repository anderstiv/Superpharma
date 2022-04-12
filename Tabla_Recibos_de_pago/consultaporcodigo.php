<script>
function validar(formulario)
{
	if(form1.txtrecid.value=='')
	{
		alert('Sr Usuario debe ingresar el id del recibo de pago');
		formulario.txtrecid.focus();
		return false;
	}
	else if (isNaN(form1.txtrecid.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtrecid.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarrec.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL CODIGO A CONSULTAR</td>
      <td>
        <input name="txtrecid" type="number" id="txtrecid" size=25/>
      </td>
    </tr>
    <tr>
      <td>
	<center>
           <input type="submit" name="Submit" value="Consultar" />
		</center>
      </td>

      <td>
	<center>
        <input type="reset" name="Submit2" value="Limpiar" />
		</center>
      </td>
    </tr>
  </table>

</form>
</center>