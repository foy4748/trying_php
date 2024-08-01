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
