<main>
	<table>
		<tr>
 		</tr

		<?php foreach ($this->photos as $photo) : ?>
			<tr>

			 	<?php	echo "<td>"; ?><img src="<?php echo  $photo["img_path"];?>" height="600" width="350"> <?php echo "</td>" ?>

				<td><?= htmlspecialchars($photo['Title'])?></td><br/>
				<td><?= htmlspecialchars($photo['date'])?></td><br/>
				<td><?= htmlspecialchars($photo['username'])?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</main>