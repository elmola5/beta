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
<title>ingreso de cliente</title>
</head>

<body>
<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>


</body>
</html>


<?

include("conexion.php");
echo"<table border='solid 1px'>";
$mesI = "2014-07-01";
$mesF = "2014-07-31";
$pot  = mysql_query("select sum(total) from FACTURA where fecha_ingreso BETWEEN '$mesI' AND '$mesF';",$conexion);

				while($con = mysql_fetch_array($pot))
					{
						$total = $con["sum(total)"];
						echo"
						<tr>
						<td>MES N°</td>
						<td>MES</td>
						<td>VALOR TOTAL</td>
						</tr>
						<tr>
						<td>7</td>
						<td>AGOSTO</td>
						<td>$total</td>
						</tr>
						
						";
						
					}
}
echo "</table>";
?>