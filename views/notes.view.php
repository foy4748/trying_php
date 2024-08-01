<section>
	<?php if (isset($notes)) foreach ($notes as $note) :  ?>
		<?php foreach ($note as $key => $value) :  ?>
			<pre>
			<?= "{$key} {$value}" ?>
		</pre>
		<?php endforeach ?>
		<br>
	<?php endforeach ?>
</section>
