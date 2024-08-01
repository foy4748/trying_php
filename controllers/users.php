<?php
$config = require(PROJECT_ROOT . "/config.php");
require(PROJECT_ROOT . "/DatabaseConnection.php");

$connection = new DatabaseConnection($config);

$users = $connection->query('SELECT * from PUBLIC."User"')->fetchAll();

require(PROJECT_ROOT . "/views/users.view.php");
