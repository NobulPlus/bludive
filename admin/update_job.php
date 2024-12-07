<?php
	session_start();
	include_once("db.php");

	$id = $_POST['id'];
	$title = strip_tags($_POST['title']);
    $content =strip_tags($_POST['content']);
   
    $title = mysqli_real_escape_string($db, $title);
    $content = mysqli_real_escape_string($db, $content);
  

$sql = "UPDATE jobs SET title='$title', content='$content'";




$sql .= " WHERE id=$id";

	$res = mysqli_query($db,$sql);
	mysqli_close($db);
	header("Location:jobs.php");
?>