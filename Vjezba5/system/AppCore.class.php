<?php

class AppCore {

	protected $dbObj;
	function __construct() {

		$this->initDB();
		$this->initOptions ();
	}

	private function handleException(Exception $e) {

	}

	private function initDB() {
		$dbhost = $dbuser= $dbpass='';
		require_once('config.inc.php');
		require_once=('model/MySQLiDatabase.class.php ');
		$dbObj = new MySQLiDatabase( $dbhost, $dbuser, $dbpass);
	}

	private function initOptions (){
		require_once('options.inc.php');
	}
	private static finalfunction getDB(){
		return self:: $dbObj;
	}
}
?>
