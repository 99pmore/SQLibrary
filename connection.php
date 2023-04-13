<?php

class Db {
    private static $instance = NULL;
	
	function __construct(){}

	public static function  getConnect() {

		$nombreDB = 'sqlibrary';
		$usuarioDB = 'root';
		$passwordDB = 'root';

		if (!isset(self::$instance)) {
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$instance = new PDO('mysql:host=localhost;dbname='.$nombreDB, $usuarioDB, $passwordDB, $pdo_options);
			self::$instance->query("SET NAMES 'utf8'");
		}  

		return self::$instance;
	}
}

?>