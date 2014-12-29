<?
session_start();
if (!isset($_SESSION["log"]))

{
	header("location: login.php");
	}

else
{
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link rel="shortcut icon" href="imagenes/favi.png">
<title>MODIFICAR CLIENTE D</title>
</head>

<body>
<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>


<?

include("conexion.php");

$id_cliente = $_POST["mod_cliente"];

$pet =  mysql_query("select * from CLIENTE where id_cliente = '$id_cliente'",$conexion);

while($con = mysql_fetch_array($pet))
{
	
	$cedula = $con["cedula"];
	$nombres = $con["nombres"];
	$apellidos = $con["apellidos"];
	$email = $con["email"];
	$telfijo = $con["telefono_fijo"];
	$telcel = $con["telefono_celular"];
	$descripcion = $con["descripcion"];
}


echo"
<form action='modificarUP.php'   method='POST'>
<fieldset id='cliente'>
<legend> INGRESO CLIENTE </legend>
<input type='hidden' name='id_cliente' value='$id_cliente'>
<label>Cedula(*)
<input type='tel'  name='cedula' value='$cedula'>
<label>Nombres(*)
<input type='text' name='nombres' value='$nombres' >
<label>Apellidos(*)
<input type='text' name='apellidos' value='$apellidos' >
<label>Email
<input type='text'  name='email' value='$email'>
<label>Telefono fijo
<input type='text' name='telfijo' value='$telfijo'>
<label>Telefono cel
<input type='text' name='telcel' value='$telcel'>
<label>Descripción
<textarea name='descripcion'>$descripcion
</textarea>
<input id='boton' type='submit'  value='MODIFICAR  CLIENTE'>
</fieldset>
</form>";
?>


</body>
</html>

<?
}
?>