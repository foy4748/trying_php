<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css" media="all">

	<!--
	<style>
		<?php include(PROJECT_ROOT . '/style.css'); ?>
	</style>  
	-->
</head>

<body>
	<?php
	/* require(PROJECT_ROOT . "/router/routes.php"); */
	$navbar_routes = [
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
	echo "<nav><ul class='flex'>";

	foreach ($navbar_routes as $path => $info) {
		echo "<li><a href='{$path}'>{$info['name']}</a></li>";
	}


	echo "</ul></nav>";
	$current_path = parse_url($_SERVER["REQUEST_URI"])['path'];
	$page_title = array_key_exists($current_path, $navbar_routes) ? $navbar_routes[$current_path]["page_title"] : "";
	?>
	<header>
		<h1><a href="/">Trying PHP | <?= $page_title ?></a></h1>
	</header>
	<main>
