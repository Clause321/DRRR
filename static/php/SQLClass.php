<?php


class DBSQL{

	private $database;
	
	public function _construct()
	{
		try{
			echo "connect success";
			$mysqli = new mysqli(constant("ServerName"), constant("MySQLUser"), constant("PWD"), constant("DBName"));
		}catch (Exception $e)
		{
			echo "failed connected";
		}
	}
	
	public function testinclude()
	{
		echo "DBSQL is included";	
	}
	
	public function checkusername($username)
	{
		$sqlquary="SELECT ".$username."FROM";
		
		
	}
	
	
}


?>
