<?php

use Lib\App;
use Lib\DatabaseConnection;

$connection = App::resolve(DatabaseConnection::class);

$id = $_POST["id"];
// $query = 'INSERT INTO public.ToDos (body, user_id) VALUES (?, 1)';

//$query = 'INSERT INTO "public"."ToDos" ("body", "user_id") VALUES (:id, 1);';

$query = 'DELETE FROM "public"."ToDos" WHERE "id" = :id;';

$delete_response = $connection->query($query, ["id" => $id])->fetchAll();

echo "NOTE DELETED Succesfully";
