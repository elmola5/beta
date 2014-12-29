<?
$pwd = "g3sti0nr3m0t4";
$conexion =  mysql_connect("localhost","root",$pwd) or die("error al conectar con el servidor");
mysql_select_db("MOLASS_INK",$conexion) or die("erro al conecar con la base de datos")
?>