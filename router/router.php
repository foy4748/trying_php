<?php
require("utilities.php");
require("router/routes.php");

$current_path = parse_url($_SERVER["REQUEST_URI"])['path'];


if (array_key_exists($current_path, $routes)) {
	require "controllers/{$routes[$current_path]['controller_file']}";
} else {
	echo "Something went wrong";
	die();
}
