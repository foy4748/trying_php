<?php
$config = require("config.php");
require("DatabaseConnection.php");

$connection = new DatabaseConnection($config);

$currentUserId = 1;

$notes = $connection->query('SELECT * from PUBLIC."ToDos" WHERE "user_id" = :id', ["id" => $currentUserId])->fetchAll();

require("views/notes.view.php");
