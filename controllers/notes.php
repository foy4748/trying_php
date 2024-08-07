<?php
$config = require base_path("/config.php");
require base_path("/DatabaseConnection.php");

$connection = new DatabaseConnection($config);

$currentUserId = 1;

$notes = $connection->query('SELECT * from PUBLIC."ToDos" WHERE "user_id" = :id', ["id" => $currentUserId])->fetchAll();

view("/notes.view.php", ["notes" => $notes]);
