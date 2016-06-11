<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{	
$id = $_POST['id'];
$name=$_POST['title'];
$age=$_POST['genre'];
$email=$_POST['description'];	
// checking empty fields
if(empty($title) || empty($genre) || empty($description)) {	
if(empty($title)) {
echo "<font color='red'>Name field is empty.</font><br/>";
}
if(empty($genre)) {
echo "<font color='red'>Age field is empty.</font><br/>";
}
if(empty($description)) {
echo "<font color='red'>Email field is empty.</font><br/>";
}	
} else {	
//updating the table
$result = mysql_query("UPDATE users SET title='$title',genre='$genre',description='$description' WHERE id=$id");
//redirectig to the display page. In our case, it is index.php
header("Location: index.php");
}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM users WHERE id=$id");
 
while($res = mysql_fetch_array($result))
{
$title = $res['title'];
$genre = $res['genre'];
$description = $res['description'];
}
?>
<html>
<head>	
<title>Edit Data</title>
</head>
 
<body>
<a href="index.php">Home</a>
<br/><br/>
<form name="form1" method="post" action="edit.php">
<table border="0">
<tr>
<td>title</td>
<td><input type="text" name="title" value=<?php echo $title;?>></td>
</tr>
<tr>
<td>genre</td>
<td><input type="text" name="genre" value=<?php echo $genre;?>></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value=<?php echo $description;?>></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>