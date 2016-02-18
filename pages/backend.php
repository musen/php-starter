<?php
$film = DB::get_instance()->query("SELECT * FROM film");

if($film) {
	$film_list = DB::get_instance()->results();
	
	print_r($film_list);
	
	echo "film found!";
} else {
	echo "No film found!";
}
?>

<html>
<head>
	<style>
		li { 
			display: inline;
			pading;
		}
	</style>
</head>
<body>
<h1>BACKEND</h1>
<h2>film list</h2>


<ul>
	<a href="#"><li>Title</li> </a>
	<a href=""><li>Genre</li> </a>
	<a href=""><li>running time</li> </a>
	<a href=""><li>poster</li> </a>
	<a href=""><li>description</li> </a>
	
	

</ul>
</body>
</html>