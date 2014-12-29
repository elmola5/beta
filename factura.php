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
<title>ingreso factura</title>
</head>

<body>
<a href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>
<div id="nota">
si,no conoces los datos del cliente,utiliza esta<br>
cedula:1010<br>
</div>
<form action="fac.php" name="formcliente" method="post">
<fieldset id="login"><CENTER>
<legend> INGRESO FACTURA </legend>
<label>CEDULA O DOCUMENTO
<input type="text" name="cc" ><br>
<input type="submit" value="INGRESAR"></CENTER>
</fieldset>
</form>
</body>
</html>

<?
}
?>