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



<?

echo"
<form action='ingreso_clientes_datos.php' name='formcliente' enctype='multipart/form-data'   method='POST'>
<fieldset id='cliente'>
<legend> INGRESO CLIENTE </legend>
<label>Cedula(*)
<input type='tel' placeholder='CC Ó NIT' name='cedula'>
<label>Nombres(*)
<input type='text' name='nombres' >
<label>Apellidos(*)
<input type='text' name='apellidos' >
<label>Email
<input type='text' placeholder='email@dominio.com' name='email'>
<label>Telefono fijo
<input type='tel' name='telfijo'>
<label>Telefono cel
<input type='tel' name='telcel'>
<label>Descripción
<textarea name='descripcion'>
</textarea>
<input id='boton' type='submit'  value='INGRESAR CLIENTE'>
</fieldset>
</form>";
?>


</body>
</html>

<?
}
?>