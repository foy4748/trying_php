<?php
require("router/routes.php");
echo "<ul class='flex'>";

foreach ($routes as $path => $info) {
	echo "<li><a href='{$path}'>{$info['name']}</a></li>";
}


echo "</ul>";
