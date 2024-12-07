<?php
    // Database configuration
$conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");
      
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if 'id' is set in the query parameter
if (isset($_GET['id'])) {
    $blog_id = $_GET['id'];
  
    // Fetch the blog entry from the database
    $sql = "SELECT id, title, content, featured_image, date, external_link, additional_file FROM posts WHERE id = ?";
  
    $stmt = mysqli_prepare($conn, $sql);
    // echo 'jh';
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $blog_id);
        mysqli_stmt_execute($stmt);
        
        // Bind result variables
        mysqli_stmt_bind_result($stmt, $id, $title, $content, $featured_image, $date, $external_link, $additional_file);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

    } else {
        die("Error preparing the statement: " . mysqli_error($conn));
    }
} else {
    die("Error: ID not provided.");
}

// Close the connection
mysqli_close($conn);
?>