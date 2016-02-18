<!DOCTYPE html>
<html>
<head>
	<title><?php echo capitalize_first_word($title); ?></title>
    <link rel="stylesheet" type="text/css" href ="<?php echo BASE_URL; ?>public/css/styles.css"/>
</head>
<body>

<?php include 'header.php'; ?>

<?php include $page; ?>

<?php include 'footer.php'; ?>


</body>
</html>