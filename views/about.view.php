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
		<h1><a href="/">Trying PHP | About</a></h1>
	</header>
	<main>
		<section>
			<h2>Programming Languagues</h2>
			<div>
				<form>
					<input name="name" placeholder="Programming Language" type="text" />
					<input name="runtime" placeholder="RunTime" type="text" />
					<input name="frameworks" placeholder="Frameworks" type="text" />
					<input name="libraries" placeholder="Libraries" type="text" />
					<button type="submit">Search</button>
					<a href="/"><button type="button">Reset 🔄</button></a>
				</form>
			</div>
			<div class="grid language-section">
				<?php foreach ($filteredData as $lang) :  ?>
					<div class="cols-3 language-card">
						<div>
							<figure class="center-item">
								<img class="img" src="<?= $lang["logoUrl"] ?>" alt="<?= $lang["name"] . " logo" ?>">

							</figure>
						</div>
						<h2><?php echo "{$lang["name"]} ™"; ?></h2>

						<div class="ps-4">
							<p>RunTime : <?= $lang["runtime"] ?></p>
							<p>Frameworks</p>
							<ul>
								<?php foreach ($lang["frameworks"] as $framework) {
									echo "<li>$framework</li>";
								} ?>
							</ul>
							<p>Libraries</p>
							<ul>
								<?php foreach ($lang["libraries"] as $library) {
									echo "<li>$library</li>";
								} ?>
							</ul>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<?php if (count($filteredData) == 0) : ?>
				<h2>No Data was found</h2>
			<?php endif ?>
		</section>
	</main>
</body>

</html>
