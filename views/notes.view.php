<section>
	<?php if (isset($notes)) foreach ($notes as $note) :  ?>
		<form method="POST">
			<input hidden name="id" value="<?= $note["id"] ?>" />
			<input hidden name="__method" value="DELETE" />
			<button>(X)</button>
		</form>
		<a href="/update/note?id=<?= $note["id"] ?>">(✏)</a>
		<?php foreach ($note as $key => $value) :  ?>
			<pre>
			<?= "{$key} {$value}" ?>
		</pre>
		<?php endforeach ?>
		<br>
	<?php endforeach ?>
</section>
