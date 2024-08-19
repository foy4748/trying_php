<section>
	<h2><?= $form_title ?? "Action Form" ?></h2>
	<form method="POST">
		<?php if ($input ?? false) : ?>
			<input type="hidden" name="id" value="<?= $_GET["id"] ?? "" ?>">
			<input type="hidden" name="__method" value="PATCH">
		<?php endif ?>
		<textarea type="text" cols="10" rows="10" name="body"><?= $input ?? "" ?></textarea>
		<button type="submit">Submit</button>
	</form>
</section>
