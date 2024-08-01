<?php
require(PROJECT_ROOT . "/DatabaseConnection.php");
$config = require(PROJECT_ROOT . "/config.php");

$connection = new DatabaseConnection($config);

$notes = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$note = $_POST["body"];
	// $query = 'INSERT INTO public.ToDos (body, user_id) VALUES (?, 1)';

	$query = 'INSERT INTO "public"."ToDos" ("body", "user_id") VALUES (:body, 1);';

	$notes = $connection->query($query, ["body" => $note])->fetchAll();
}


# dd($notes);
require(PROJECT_ROOT . "/views/create_note.view.php");
