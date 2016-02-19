<h1>About Page</h1><?php if ($selected_title_id) { ?>
<?php $current_title = find_title_by_id($selected_title_id);} ?>
title: <?php echo $current_title["title"]; ?><br />
