<?php

use Lib\App;
use Lib\DatabaseConnection;

$connection = App::resolve(DatabaseConnection::class);

$users = $connection->query('SELECT * from PUBLIC."User"')->fetchAll();

view("/users.view.php", ["users" => $users]);
