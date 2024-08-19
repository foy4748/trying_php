<?php

use Lib\DatabaseConnection;
use Lib\App;


$connection = App::resolve(DatabaseConnection::class);

$note = $_POST["body"];
$id = $_POST["id"];
// $query = 'INSERT INTO public.ToDos (body, user_id) VALUES (?, 1)';

$query = 'UPDATE "public"."ToDos" SET body = :body WHERE id = :id';

$notes = $connection->query($query, ["body" => $note, "id" => $id])->fetchAll();

echo "NOTE UPDATED Succesfully";
