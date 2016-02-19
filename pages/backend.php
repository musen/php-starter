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
			padding: 20px;
			margin: 10;
		}
	</style>
</head>
<body>
<h1>BACKEND</h1>
<h2>film list</h2>


<ul>
<li>Title</li> </a>
<li>Genre</li> </a>
<li>running time</li> </a>
<li>poster</li> </a>
<li>description</li> </a>
	
	

</ul>
</body>
</html>