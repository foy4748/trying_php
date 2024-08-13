<?php

use Lib\DatabaseConnection;
use Lib\App;

$connection = App::resolve(DatabaseConnection::class);

$currentUserId = 1;

$notes = $connection->query('SELECT * from PUBLIC."ToDos" WHERE "user_id" = :id', ["id" => $currentUserId])->fetchAll();

view("/notes.view.php", ["notes" => $notes]);
