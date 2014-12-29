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
<title>LISTADO DE CLIENTES</title>
</head>
<body>

<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>


<CENTER>
<p> <BR><BR>LISTADO DE CLIENTES<BR><BR> </p>
</CENTER>

<?

include("conexion.php");

$pet  = mysql_query("select * from CLIENTE",$conexion);


echo "
<center>
<div id='tabla1'>
<table border='1px'>
<tr>
<td> ID CLIENTE</td>
<td> CEDULA</td>
<td> NOMBRES</td>
<td> APELLIDOS</td>
<td> EMAIL</td>
<td> TELEFONO FIJO</td>
<td> CELULAR</td>
<td> DESCRIPCIÓN</td>
</tr>
";

while($con = mysql_fetch_array($pet))

{
	
	$id = $con["id_cliente"];
	$cedula = $con["cedula"];
	$nombres = $con["nombres"];
	$apellidos = $con["apellidos"];
	$email = $con["email"];
	$telefono_fijo = $con["telefono_fijo"];
	$telefono_celular = $con["telefono_celular"];
	$descripcion = $con["descripcion"];
	
	
	echo "
<tr>
<td> $id</td>
<td> $cedula</td>
<td> $nombres</td>
<td> $apellidos</td>
<td> $email</td>
<td> $telefono_fijo </td>
<td> $telefono_celular</td>
<td> $descripcion</td>
</tr>
";
	
	
	
	}


echo"</table> </div></center>";



	}
?>


