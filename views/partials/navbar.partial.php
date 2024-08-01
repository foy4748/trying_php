<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css" media="all">
</head>

<body>
	<?php
	require(PROJECT_ROOT . "/router/routes.php");
	echo "<nav><ul class='flex'>";

	foreach ($routes as $path => $info) {
		echo "<li><a href='{$path}'>{$info['name']}</a></li>";
	}


	echo "</ul></nav>"; 
	?>
	<header>
	<h1><a href="/">Trying PHP | <?php echo (isset($page_title) ? $page_title : "Welcome"); ?></a></h1>
	</header>
	<main>
