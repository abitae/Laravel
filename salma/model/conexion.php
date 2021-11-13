<?php  
	$contrasena = 'lobomalo123A..';
	$usuario = 'abelaran_fenrir';
	$nombrebd= 'abelaran_fenrir';


	try {
		$bd = new PDO(
			'mysql:host=170.10.164.219;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>