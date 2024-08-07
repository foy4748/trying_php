<?php

function dd($payload)
{
	echo "<pre>";
	var_dump($payload);
	echo "</pre>";
	die();
}

function base_path($path)
{
	return PROJECT_ROOT . $path;
}

function view($path, $arguments = [])
{
	extract($arguments);
	require PROJECT_ROOT . "/views" . $path;
}
