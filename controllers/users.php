<?php
$config = require base_path("/config.php");
//require base_path("/DatabaseConnection.php");

use Lib\DatabaseConnection;

$connection = new DatabaseConnection($config);

$users = $connection->query('SELECT * from PUBLIC."User"')->fetchAll();

view("/users.view.php", ["users" => $users]);
