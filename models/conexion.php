<?php

$local = true;

class Conexion {

	public function Conectar () {

		global $local;

		if ($local == true) {
			$link = new PDO("mysql:host=localhost;dbname=hconstructora",
				"root",
				"",
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			);

		} else {
			$link = new PDO("mysql:host=localhost;dbname=duotek_sgtaller",
				"duotek_usrtaller",
				"sgtaller1234",
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			);	
		}

		return $link;
	}
}

?>
