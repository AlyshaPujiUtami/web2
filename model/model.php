<?php
/**
*
*/
class model
	public $db;

	function_construct()
	{
		require_once '../config/database.php';
		try{
			$this->db = new PDO ("mysql:host={$host};dbname={$dbname}",$username,$password);
			$this->db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $exception){
			die("Connection error: ").$exception->getMessage());
		}
	}
}

?>	
