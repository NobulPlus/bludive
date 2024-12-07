<?php
include_once("db.php");
include_once('functions.php');
sec_session_start();
if(isset($_GET['del']) && login_check($db) == true){
	$id=$_GET['del'];
	$query = "DELETE from posts WHERE ID = $id" or die("Non!").mysql_error();
	$res = mysqli_query($db,$query) or die("Failed".mysql_error());
	
	
	header("Location: index.php");
}

	header("Location: index.php");
?>
