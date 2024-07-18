<?php
$config = require_once("config.php");
require_once "DatabaseConnection.php";

$connection = new DatabaseConnection($config);

$currentUserId = 1;

$notes = $connection->query('SELECT * from PUBLIC."ToDos" WHERE "user_id" = :id', ["id" => $currentUserId])->fetchAll();
