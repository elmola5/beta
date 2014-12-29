<?
session_start();

if(!isset($_SESSION["log"]))
{
	header("location: login.php");
	exit();
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
<title>MODIFICAR CLIENTE</title>
</head>
<body>

<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>





<?


include("conexion.php");

echo"
<form action='modificarClienteDatos.php'  method='POST'>
<fieldset>
<legend>MODIFICAR CLIENTE </legend>
<select name='mod_cliente'>



";

$pet  = mysql_query("select * from CLIENTE ",$conexion);



while($con = mysql_fetch_array($pet))

{
	$id_cliente = $con["id_cliente"];
	$cedula = $con["cedula"];
	$nombres = $con["nombres"];
	$apellidos = $con["apellidos"];
	$email = $con["email"];
	$telfijo = $con["telefono_fijo"];
	$telcel = $con["telefono_celular"];
	$descripcion = $con["descripcion"];
	
	
echo"<option value='$id_cliente'>CEDULA:$cedula----CLIENTE:$nombres,$apellidos</option>";
	


	}
	
	
	echo "
	</select>
	<input id=boton type='submit'  value='MODIFICAR CLIENTE'>
	</fieldset>
	</form>
	";
	
	
	

	}
?>



