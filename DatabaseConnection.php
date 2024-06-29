<?php

$config = require('config.php');

class DatabaseConnection
{
	public $pdo;
	public function __construct($config)
	{
		$dsn =  'pgsql:' . http_build_query($config['database'], '', ';');
		try {

			// make a database connection
			$this->pdo =  new PDO(
				$dsn,
				$config['database_authentication']['user'],
				$config['database_authentication']['password'],
				[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
			);
		} catch (PDOException $e) {
			$this->pdo = null;
			dd($e);
			die($e->getMessage());
		}
	}

	public function query($q)
	{
		if ($this->pdo) {
			$statement = $this->pdo->prepare($q);
			$statement->execute();

			$data = $statement->fetchAll();
			return $data;
		}
		return null;
	}
}
