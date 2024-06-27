<?php
$programmingLanguages = [
	[
		"name" => "JavaScript",
		"runtime" => "NodeJS",
		"frameworks" => ["NextJS"],
		"logoUrl" => "https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png",
		"libraries" => ["ReactJS", "ExpressJS", "Redux"]
	],
	[
		"name" => "Python",
		"runtime" => "Python",
		"frameworks" => ["Django", "Flasks"],
		"logoUrl" => "https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg",
		"libraries" => ["Numpy", "Pandas", "Sci-Pi", "Matplotlib"]
	],
	[
		"name" => "PHP",
		"runtime" => "PHP",
		"frameworks" => ["Laravel", "Symfony"],
		"logoUrl" => "https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg",
		"libraries" => ["Selenium", "ORM"]
	]
];


$searchFilter = function ($itm) {
	if (!sizeof($_GET)) return true;
	foreach ($_GET as $key => $value) {
		if (gettype($itm[$key]) == 'array' && array_search($value, $itm[$key]) > -1) {
			return true;
		};
		if ($value != '' && $itm[$key] == $value) return true;
	}


	return false;
};

$searchPragrammingLanguages = function ($data, $fn) {

	$searchedItems =  [];

	foreach ($data as $item) {
		if ($fn($item)) {
			$searchedItems[] = $item;
		}
	}

	return $searchedItems;
};

$filteredData = $searchPragrammingLanguages($programmingLanguages, $searchFilter);

require "./index.view.php";
