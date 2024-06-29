<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" media="all">
</head>

<body>
	<?php include("controllers/users.php"); ?>
	<header>
		<h1><a href="/">Trying PHP | Users</a></h1>
	</header>
	<main>
		<section>
			<?php foreach ($users as $user) :  ?>
				<pre>
					<?= "{$user['username']} {$user['email']}" ?>
				</pre>
			<?php endforeach ?>
		</section>
	</main>
</body>

</html>
