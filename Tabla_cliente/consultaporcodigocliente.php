<script>
function validar(formulario)
{
	if(form1.txtcliid.value=='')
	{
		alert('Sr Usuario debe ingresar el codigo del cliente');
		formulario.txtcliid.focus();
		return false;
	}
	else if (isNaN(form1.txtcliid.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtcliid.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarCliente.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL CLIENTE A CONSULTAR</td>
      <td>
        <input name="txtcliid" type="" id="txtcliid" size=25/>
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