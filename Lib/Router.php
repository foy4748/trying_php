<?php

namespace Lib;

class Router
{
	public $routes = [];

	public function getRoutes()
	{
		return $this->routes;
	}

	public function get($path, $controller)
	{
		$this->routes[] = [
			"path" => $path,
			"controller" => $controller,
			"method" => "GET"
		];
	}

	public function post($path, $controller)
	{
		$this->routes[] = [
			"path" => $path,
			"controller" => $controller,
			"method" => "POST"
		];
	}

	public function delete($path, $controller)
	{
		$this->routes[] = [
			"path" => $path,
			"controller" => $controller,
			"method" => "DELETE"
		];
	}

	public function put($path, $controller)
	{
		$this->routes[] = [
			"path" => $path,
			"controller" => $controller,
			"method" => "PUT"
		];
	}
	public function patch($path, $controller)
	{
		$this->routes[] = [
			"path" => $path,
			"controller" => $controller,
			"method" => "PATCH"
		];
	}

	public function route($current_path, $method)
	{
		foreach ($this->routes as $route) {
			if ($route["path"] == $current_path && $route["method"] == $method) {
				$page_title = "Default";
				view("/partials/navbar.partial.php");
				return require base_path("/controllers/{$route["controller"]}");
			}
		}
		echo "Something went wrong";
		die();
	}
}
