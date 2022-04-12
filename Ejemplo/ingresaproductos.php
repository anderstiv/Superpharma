<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Productos</title>

<script>

function validar(formulario)
{

if(formulario.txtcodigo.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.txtcodigo.focus();
return false;
}

if (isNaN(formulario.txtcodigo.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtcodigo.focus();
formulario.txtcodigo.value='';
return false;
}

if(formulario.txtnombre.value=='')
{
alert('Sr Usuario debe ingresar la descripcion');
formulario.txtnombre.focus();
return false;
}

if(formulario.txtcantidad.value=='')
{
alert('Sr Usuario debe ingresar la cantidad');
formulario.txtcantidad.focus();
formulario.txtcantidad.value='';
return false;
}

if(formulario.txtvalor.value=='')
{
alert('Sr Usuario debe ingresar un valor');
formulario.txtvalor.focus();
formulario.txtvalor.value='';
return false;
}



if(formulario.cmbundmedida.value==0)
{
alert('Sr Usuario debe seleccionar una unidad de medida');
formulario.cmbundmedida.focus();
return false;
}

return true;
}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE PRODUCTOS</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarproductos.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO</td>
      <td>
        <input name="txtcodigo" type="text" id="txtcodigo" size=5/>
      </td>
    </tr>
    <tr>
      <td>DESCRIPCION</td>
      <td>
        <input name="txtnombre" type="text" id="txtnombre" size=30/>
      </td>
    </tr>
	<tr>
      <td>CANTIDAD</td>
      <td>
        <input name="txtcantidad" type="text" id="txtcantidad" size=5/>
      </td>
    </tr>
	<tr>
      <td>VALOR</td>
      <td>
        <input name="txtvalor" type="text" id="txtvalor" size=12/>
      </td>
    </tr>
	<tr>
 
     
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
                    echo  "<option value=$row[0]> $row[1] </option>";
                }
        
		echo "</select>";	
		?></td>
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
