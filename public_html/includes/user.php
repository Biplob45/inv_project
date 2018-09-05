<?php

/**
 * User Class for account creation and login purpose.
 */
class User
{
	private $con;
	
	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
		$this->con = $db->connect();
		if ($this->con) {
			echo "Connected";
		}

	}
}

$obj = new User();

?>