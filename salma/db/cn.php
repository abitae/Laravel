<?php
/*Datos de conexion a la base de datos*/
$db_host = "170.10.164.219";
$db_user = "abelaran_fenrir";
$db_pass = "lobomalo123A..";
$db_name = "abelaran_fenrir";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>