<?php

namespace Lib;

$config = require base_path('/config.php');


use PDO;
use PDOException;


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
				[
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				]
			);
		} catch (PDOException $e) {
			$this->pdo = null;
			dd($e);
			die($e->getMessage());
		}
	}

	public function query($q, $params = [])
	{
		if ($this->pdo) {
			$statement = $this->pdo->prepare($q);
			$statement->execute($params);

			return $statement;
		}
		return null;
	}
}
