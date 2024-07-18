<?php


$routes = [
	'/' => [
		'name' => 'Home',
		'page_title' => 'Home',
		'view_file' => 'index.view.php'
	],
	'/about' => [
		'name' => 'About',
		'page_title' => 'About Us',
		'view_file' => 'about.view.php'
	],
	'/dashboard' => [
		'name' => 'Dashboard',
		'page_title' => 'Dashboard',
		'view_file' => 'dashboard.view.php'
	],
	'/users' => [
		'name' => 'Users',
		'page_title' => 'Users',
		'view_file' => 'users.view.php'
	],
	'/notes' => [
		'name' => 'Notes',
		'page_title' => 'Notes',
		'view_file' => 'notes.view.php'
	],
	'/create/note' => [
		'name' => 'Create_Note',
		'page_title' => 'Create a Note',
		'view_file' => 'create_note.view.php'
	],
];
