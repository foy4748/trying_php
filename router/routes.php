<?php

$router->get("/", "index.php");
$router->get("/about", "about.php");
$router->get("/dashboard", "dashboard.php");
$router->get("/users", "users.php");
$router->get("/notes", "notes.php");
$router->get("/create/note", "create_note.php");

/*
$routes = [
	'/' => [
		'name' => 'Home',
		'page_title' => 'Home',
		'controller_file' => 'index.php'
	],
	'/about' => [
		'name' => 'About',
		'page_title' => 'About Us',
		'controller_file' => 'about.php'
	],
	'/dashboard' => [
		'name' => 'Dashboard',
		'page_title' => 'Dashboard',
		'controller_file' => 'dashboard.php'
	],
	'/users' => [
		'name' => 'Users',
		'page_title' => 'Users',
		'controller_file' => 'users.php'
	],
	'/notes' => [
		'name' => 'Notes',
		'page_title' => 'Notes',
		'controller_file' => 'notes.php'
	],
	'/create/note' => [
		'name' => 'Create_Note',
		'page_title' => 'Create a Note',
		'controller_file' => 'create_note.php'
	],
];
*/
