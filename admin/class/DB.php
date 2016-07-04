<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'u453794882_king');
define('DB_USER', 'u453794882_king');
define('DB_PASS', 'gamabeta');
define('DB_CHAR', 'utf8');

class DB
{
	private static $instance;
public static function getInstance(){
	if(!isset(self::$instance)){
		try {
			self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
			self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	return self::$instance;
}

public static function prepare($sql){
	return self::getInstance()->prepare($sql);
}

}
