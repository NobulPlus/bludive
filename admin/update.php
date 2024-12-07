<?php
	session_start();
	include_once("db.php");

	$id = $_POST['id'];
	$title = strip_tags($_POST['title']);
    $content =strip_tags($_POST['content']);
    $type = strip_tags($_POST['type']);
    $external_link = strip_tags($_POST['external_link']);

    $title = mysqli_real_escape_string($db, $title);
    $content = mysqli_real_escape_string($db, $content);
    $type = mysqli_real_escape_string($db, $type);
    $external_link = mysqli_real_escape_string($db, $external_link);


	  // Handle the file upload
	  $featured_image = '';
	  if(isset($_FILES['featured_image']) && $_FILES['featured_image']['error'] == 0){
		  $upload_dir = 'uploads/';
		  // Create the uploads directory if it doesn't exist
		  if (!file_exists($upload_dir)) {
			  mkdir($upload_dir, 0777, true);
		
		  }
		  // Generate a unique name for the file
		  $featured_image = $upload_dir . uniqid() . '-' . basename($_FILES['featured_image']['name']);
		
		  if(!move_uploaded_file($_FILES['featured_image']['tmp_name'], $featured_image)){
			  $featured_image = '';
		  }

		}

		$additional_file = "";
		if(isset($_FILES['additional_file']) && $_FILES['additional_file']['error'] == 0){
			$upload_dir = 'uploads/';
			// Create the uploads directory if it doesn't exist
			if (!file_exists($upload_dir)) {
				mkdir($upload_dir, 0777, true);
			}
			// Generate a unique name for the file
			$additional_file = $upload_dir . uniqid() . '-' . basename($_FILES['additional_file']['name']);
			if(!move_uploaded_file($_FILES['additional_file']['tmp_name'], $additional_file)){
				$additional_file = '';
			}
  
		  }
  



	  // Build the SQL query
$sql = "UPDATE posts SET title='$title', content='$content', type='$type', external_link='$external_link'";

// Add featured_image to the query if it was uploaded
if ($featured_image !== '') {
    $sql .= ", featured_image='$featured_image'";
}

// Add additional_file to the query if it was uploaded
if ($additional_file !== '') {
    $sql .= ", additional_file='$additional_file'";
}

$sql .= " WHERE id=$id";



	$res = mysqli_query($db,$sql);
	mysqli_close($db);
	header("Location:index.php");
?>