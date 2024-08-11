<?php
require("utilities.php");

define('PROJECT_ROOT', __DIR__);

spl_autoload_register(function ($path) {
	require base_path(DIRECTORY_SEPARATOR . "{$path}.php");
});

require(PROJECT_ROOT . "/router/router.php");
view("/partials/footer.partial.php");
