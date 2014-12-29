
<!doctype>
<html lang="es">
<head>
<meta charset="utf-8">
</head>
<body>
<?
/*date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");
//echo strftime("%A %d de %B del %Y");
$dia = strftime("%A %d de %B del %Y");
echo " hoY es el dia: $dia  ";

*/

$hora  = date('h:i:s');
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y').",hora $hora" ;
//Salida: Viernes 24 de Febrero del 2012
?>

</body>
</html>