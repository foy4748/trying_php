<?php

use Lib\DatabaseConnection;
use Lib\App;


$connection = App::resolve(DatabaseConnection::class);

$note = $_POST["body"];
// $query = 'INSERT INTO public.ToDos (body, user_id) VALUES (?, 1)';

$query = 'INSERT INTO "public"."ToDos" ("body", "user_id") VALUES (:body, 1);';

$notes = $connection->query($query, ["body" => $note])->fetchAll();

echo "NOTE CREATED Succesfully";
