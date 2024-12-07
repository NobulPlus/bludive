<?php
include_once 'psl-config.php'; 
$db = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");


if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>