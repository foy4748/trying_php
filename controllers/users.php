<?php
$config = require_once("config.php");
require_once "DatabaseConnection.php";

$connection = new DatabaseConnection($config);

$users = $connection->query('SELECT * from PUBLIC."User"')->fetchAll();
