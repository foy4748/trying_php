<?php
$config = require(PROJECT_ROOT . "/config.php");
require(PROJECT_ROOT . "/DatabaseConnection.php");

$connection = new DatabaseConnection($config);

$currentUserId = 1;

$notes = $connection->query('SELECT * from PUBLIC."ToDos" WHERE "user_id" = :id', ["id" => $currentUserId])->fetchAll();

require(PROJECT_ROOT . "/views/notes.view.php");
