<main>
	<table>
		<tr>
			<th>img_path</th>
			<th>img_name</th>
		</tr

		<?php foreach ($this->photos as $photo) : ?>
			<tr>
<!--				$image = --><?//= htmlspecialchars($photo['img_path'])?>
				<td><img src="<?=APP_ROOT?>/['img_path']" ?>" height="350" width="350><?php echo "</td>";?>

				<td><?= htmlspecialchars($photo['img_name'])?>
			</tr>
		<?php endforeach; ?>
	</table>
</main>