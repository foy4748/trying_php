<?php

use Lib\Containers;
use Lib\App;
use Lib\DatabaseConnection;


require("utilities.php");

define('PROJECT_ROOT', __DIR__);

spl_autoload_register(function ($path) {
	require base_path(DIRECTORY_SEPARATOR . "{$path}.php");
});



// BootStrapping the app
$containers = new Containers();
$containers->bind(DatabaseConnection::class, function () {
	$config = require base_path("/config.php");
	//require base_path("/DatabaseConnection.php");


	$connection = new DatabaseConnection($config);
	return $connection;
});

App::setContainer($containers);

require(PROJECT_ROOT . "/router/router.php");
view("/partials/footer.partial.php");
