<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" media="all">
</head>

<body>
	<header>
		<h1><a href="/">Trying PHP | Users</a></h1>
	</header>
	<main>
		<section>
			<?php if (isset($users)) foreach ($users as $user) :  ?>
				<?php foreach ($user as $key => $value) :  ?>
					<pre>
					<?= "{$key} {$value}" ?>
				</pre>
				<?php endforeach ?>
				<br>
			<?php endforeach ?>
		</section>
	</main>
</body>

</html>
