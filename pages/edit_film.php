<?php if(!isset($_GET['id'])) die('Film not found!'); ?>

<?php

$film = DB::get_instance()->query("SELECT * FROM film WHERE id = ? ", array($_GET['id']))->results();

if(DB::get_instance()->num_rows() == 0) die('Film not found!');

print_r($film);


//make film editabale and save to database
?>