<?php
$films = DB::get_instance()->query("SELECT * FROM film");
?>
<h1>Films</h1>

<?php if($films): $film_list = DB::get_instance()->results(); ?>
<table>

	<thead>
		<tr>
			<th>Title</th>
			<th>Running Time</th>
			<th>Genre</th>
			<th>Actions</th>
		</tr>
	</thead>
	
	<tbody>
	<?php foreach($film_list as $film): ?>
		<tr>
			<td>
				<a href="<?php echo BASE_URL; ?>?page=edit_film&id=<?php echo $film->id; ?>">
					<?php echo $film->title; ?></a>
			</td>
			<td><?php echo $film->running_time; ?></td>
			<td><?php echo $film->genre; ?></td>
			<td>
				<a href="<?php echo BASE_URL; ?>?page=edit_film&id=<?php echo $film->id; ?>">Edit</a> | 
				<a href="<?php echo BASE_URL; ?>?page=delete_film&id=<?php echo $film->id; ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	
</table>

<?php else: ?>
<h4>No films found to display!</h4>
<?php endif; ?>