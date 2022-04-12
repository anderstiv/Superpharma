<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Categoria</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if(isNaN(formulario.txtcatid.value==''))
{
alert('Sr Usuario debe ingresar el id de la categoria');
formulario.txtcatid.focus();
formulario.txtcatid.value='';
return false;
}

if(formulario.txtdes.value=='')
{
alert("Sr usuario debe ingresar la descripcion de la categoria");
formulario.txtdes.focus();
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE CATEGORIAS</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarcategoria.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO DE LA CATEGORIA</td>
      <td>
        <input name="txtcatid" type="number" id="txtcatid" size=11/>
      </td>
    </tr>
    <tr>
      <td>DESCRIPCION</td>
      <td>
        <input name="txtdes" type="text" id="txtdes" size=45/>
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
