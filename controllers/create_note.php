<?php
require("../utilities.php");
require("../DatabaseConnection.php");
$config = require("../config.php");

$connection = new DatabaseConnection($config);

$note = $_POST["body"];
// $query = 'INSERT INTO public.ToDos (body, user_id) VALUES (?, 1)';

$query = 'INSERT INTO "public"."ToDos" ("body", "user_id") VALUES (:body, 1);';

$notes = $connection->query($query, ["body" => $note])->fetchAll();

dd($notes);
