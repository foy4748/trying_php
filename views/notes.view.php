<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" media="all">
</head>

<body>
	<?php include("controllers/notes.php"); ?>
	<header>
		<h1><a href="/">Trying PHP | Notes</a></h1>
	</header>
	<main>
		<section>
			<?php foreach ($notes as $note) :  ?>
				<?php foreach ($note as $key => $value) :  ?>
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
