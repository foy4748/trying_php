<?php
use Lib\App;
use Lib\DatabaseConnection;

$db = App::resolve(DatabaseConnection::class);

$id = $_GET["id"];

$note = $db->query('SELECT * from PUBLIC."ToDos" WHERE "id" = :id', ["id" => $id])->fetch();



view("/create_note.view.php",[
	"input" => $note["body"],
	"form_title" => "Edit a Note"
]);
