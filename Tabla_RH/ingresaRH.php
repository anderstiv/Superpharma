<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>INGRESO DE RH</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if (isNaN(formulario.txtidRH.value==''))
{
alert('Sr Usuario debe ingresar el id de RH');
formulario.txtidRH.focus();
formulario.txtidRH.value='';
return false;
}

if(formulario.txtrhdes.value=='')
{
alert("Sr Usuario debe ingresar la descripcion del RH");
formulario.txtrhdes.focus();
return false;
}

}
</script>

<h1 ALIGN=CENTER>ENTRAR DATOS DE RH</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarRH.php">


  			<table width="400" border="1">
                 
				<tr>
					<td>ID</td>
					<td>
						<input name="txtidRH" type="number" id="txtidRH" size=25/>
					</td>
				</tr>

				<tr>
					<td>DESCRIPCION</td>
					<td>
						<input name="txtrhdes" type="text" id="txtrhdes" size=25/>
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
</form>
</center>


</body>
</html>
