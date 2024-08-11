<?php


use Lib\Router;

$router = new Router();
require base_path("/router/routes.php");


$current_path = parse_url($_SERVER["REQUEST_URI"])['path'];
$method = $_POST["__method"] ?? $_SERVER['REQUEST_METHOD'];

$router->route($current_path, $method);


/*
if (array_key_exists($current_path, $routes)) {
	$page_title = $routes[$current_path]['page_title'];
	view("/partials/navbar.partial.php", ["page_title" => $page_title]);
	require base_path("/controllers/{$routes[$current_path]['controller_file']}");
} else {
	echo "Something went wrong";
	die();
}
*/
