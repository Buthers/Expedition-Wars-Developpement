<?php

class Database
{
	protected $_database = null;
	private static $_instance = null;
	const DEFAULT_SQL_HOST = "localhost";
	const DEFAULT_SQL_DBNAME = "expedition-wars";
	const DEFAULT_SQL_USER = "root";
	const DEFAULT_SQL_PASSWORD = "";

	public function __construct()
	{
		try
		{
			$this->_database = new PDO("mysql:host=".self::DEFAULT_SQL_HOST.";dbname=".self::DEFAULT_SQL_DBNAME, self::DEFAULT_SQL_USER, self::DEFAULT_SQL_PASSWORD);
			$this->_database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
		{
			throw new Exception($e->getMessage());
		}
	}

	public static function GetInstance()
	{
		if(is_null(self::$_instance))
		{
			self::$_instance = new Database();
		}
		return self::$_instance;
	}
}

?>