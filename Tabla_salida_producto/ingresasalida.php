<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SALIDA DE PRODUCTOS</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if(isNaN(formulario.txtid.value==''))
{
alert('Sr Usuario debe ingresar el id de salida del producto');
formulario.txtid.focus();
formulario.txtid.value='';
return false;
}

if(time(formulario.txtfechasal.value==''))
{
alert('Sr Usuario debe ingresar la fecha de salida');
formulario.txtfechasal.focus();
formulario.txtfechasal.value='';
return false;
}

if(isNaN(formulario.txtsalcantidad.value==''))
{
alert('Sr Usuario debe ingresar la cantidad de salida');
formulario.txtsalcantidad.focus();
formulario.txtsalcantidad.value='';
return false;
}

if(isNAN(formulario.txtpreciosal.value==''))
{
alert('Sr Usuario debe ingresar el precio de salida del producto');
formulario.txtpreciosal.focus();
formulario.txtpreciosal.value='';
return false;
}

if(isNAN(formulario.txtprecioventa.value==''))
{
alert('Sr Usuario debe ingresar el precio de venta');
formulario.txtprecioventa.focus();
formulario.txtprecioventa.value='';
return false;
}

if(isNAN(formulario.txtfechaven.value==''))
{
alert('Sr Usuario debe ingresar la fecha de venta');
formulario.txtfechaven.focus();
formulario.txtfechaven.value='';
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRAR DATOS DE SALIDA</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarsalida.php">


  <table width="400" border="1">
  				<tr>
					<td width=50%>ID</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA DE SALIDA</td>
					<td>
						<input name="txtfechasal" type="date" id="txtfechasal" size=25/>
					</td>
				</tr>

				<tr>
					<td>CANTIDAD</td>
					<td>
						<input name="txtsalcantidad" type="number" id="txtsalcantidad" size=25/>
					</td>
				</tr>
				
				<tr>
					<td>PRECIO SALIDA</td>
					<td>
						<input name="txtpreciosal" type="number" id="txtpreciosal" size=11/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE VENTA</td>
					<td>
						<input name="txtprecioventa" type="number" id="txtprecioventa" size=11/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE VENTA</td>
					<td>
						<input name="txtfechaven" type="date" id="txtfechaven" size=10/>
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
