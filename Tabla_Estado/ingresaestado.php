<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Estado</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if(isNaN(formulario.txtidestado.value==''))
{
alert('Sr Usuario debe ingresar el id del estado');
formulario.txtidestado.focus();
formulario.txtidestado.value='';
return false;
}

if(formulario.txtdescripcion.value=='')
{
alert("Sr usuario debe ingresar la descripcion");
formulario.txtdescripcion.focus();
return false;
}


}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE ESTADO</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarestado.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>ID DEL ESTADO</td>
      <td>
        <input name="txtidestado" type="number" id="txtidestado" size=11/>
      </td>
    </tr>
    <tr>
      <td>DESCRIPCION</td>
      <td>
        <input name="txtdescripcion" type="text" id="txtdescripcion" size=45/>
      </td>
    </tr>
	<tr>
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
</form>
</center>


</body>
</html>
