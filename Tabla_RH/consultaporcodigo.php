<html>
<center>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>RH</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>
function validar(formulario)
{
	if(form1.txtidRH.value=='')
	{
		alert('Sr Usuario debe ingresar el id del RH');
		formulario.txtidRH.focus();
		return false;
	}
	else if (isNaN(form1.txtidRH.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtidRH.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarRH.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL RH</td>
      <td>
        <input name="txtidRH" type="number" id="txtidRH" size=25/>
      </td>
    </tr>
    <tr>
      <td>
	<center>
           <input type="submit" name="Submit" value= "Consultar"/>
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