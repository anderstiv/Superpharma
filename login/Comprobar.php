<?php
$usuario = $_POST["user"];
session_start();
$_SESSION["usuario"]=$usuario;
// include ("conexion.php");
$link=mysqli_connect("localhost","root","","superpharma");
$consulta = ("SELECT * FROM personas where usuario_id 'usuario' and contraseña_personas = '$password'");
//$result=mysqli_query($link,$query);
$resultado=mysqli_query($link,$consulta);
$filas=mysqli_fetch_array($resultado);

if($filas["personas_id_roll"]==1){ // Administrador
    $_SESSION["usuario"]=$usuario;
            header("location:indexA.php"); // la que pagina lo direcciona
}
elseif ($filas["personas_id_roll"]==2){ // Vendedor
    $_SESSION["usuario"]=$usuario;
            header("location:indexE.php"); // la que pagina lo direcciona
}
else{
    header("location:login.php");
}
 
        mysqli_free_result($resultado);
        mysqli_close($conexion);
        

?>