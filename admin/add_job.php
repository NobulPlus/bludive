<?php
include_once('db.php');
include_once('functions.php');
sec_session_start();


if(isset($_POST['post'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);
   
    $title = mysqli_real_escape_string($db, $title);
    $content = mysqli_real_escape_string($db, $content);

    $date = (new DateTime())->modify('-1 hour')->format('jS \of F Y h:i:s A');

    if($title == ""){
        echo "<script>alert('Please fill all required fields'); window.history.back();</script>";
    } else {
        // Handle the file upload

        $sql = "INSERT INTO jobs (title, content, date) VALUES ('$title', '$content', '$date')";
        mysqli_query($db, $sql);
        header("Location: jobs.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" media="screen,projection">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
  <title>Create a new Post</title>
  <style type="text/css">
  body {
    background-color: #d9d9d9;
    background-position: center center;
    background-repeat: no-repeat; 
    /* Safari 4-5, Chrome 1-9 */ 
    background: -webkit-gradient(radial, center center, 0, center center, 460, from(#d9d9d9), to(#ffffff)); 
    /* Safari 5.1+, Chrome 10+ */ 
    background: -webkit-radial-gradient(circle, #d9d9d9, #fff);
    /* Firefox 3.6+ */ 
    background: -moz-radial-gradient(circle, #d9d9d9, #fff); 
    /* IE 10 */ 
    background: -ms-radial-gradient(circle, #d9d9d9, #fff); 
    /* Opera */
    background: radial-gradient(circle at 50% 50%, #fff, #d9d9d9);
    font-family: 'Poppins', sans-serif;
  }

  

  .nav-wrapper, .footer-copyright,  footer.page-footer{
  background-color: #0d47a1;
}
  </style>
</head>
<body>
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> 
  <nav>
    <div class="nav-wrapper">
       
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="add_job.php">Create a New Job</a></li>
        <li><a href="jobs.php">Back to Jobs</a></li>
        <?php if (login_check($db) == true) {
         echo "<li><a href=\"logout.php\">Log Out</a></li>";
        }
        else {
          header('Location: login.php');
          echo "<li><a href=\"login.php\">Login</a></li>";
        }
        ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="add_job.php">Create a New Job</a></li>
        <li><a href="jobs.php">Back to Jobs</a></li>
        <?php if (login_check($db) == true) {
            //  $name = htmlentities($_SESSION["username"], ENT_QUOTES, 'UTF-8');
          // echo "<li><p>Welcome ".$name."!</p></li>";
          echo "<li><a href=\"logout.php\">Logout</a></li>";
        }
        ?>
      </ul>
    </div>
  </nav>      

  <?php if (login_check($db) == true) : ?>
          
<div class="container" style="margin-bottom: 40px; min-height: 75vh;">
<p style="margin-top: 40px" class="flow-text">Create a new Job Listing!</p>
  
 
  <form class="col s12" action="add_job.php" method="POST" role="form" role="form" enctype="multipart/form-data">
  <div class="row">
        <div class="input-field col s12">
          <input id="title" type="text" name="title" class="validate">
          <label for="title">Enter Title</label>
        </div>
  </div>
  <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" type="text" class="materialize-textarea validate" name="content" rows="10"></textarea>
          <label for="textarea1">Enter Content</label>
        </div>
     </div>

     <input name="post" type="submit" value="Post it!" class="waves-effect waves-light btn">
    </form>
         <?php else : ?>
            <p>
                <span class="error flow-text">You are not authorized to access this page. Please <a href="login.php">login</a>.</span>
            </p>
        <?php endif; ?>
  </div>
</div>




<footer class="page-footer">
        
          <div class="footer-copyright">
            <div class="container">
            &copy; 2024 BluDive
          
            </div>
          </div>
        </footer>

<script>
  $( document ).ready(function(){
    $('#textarea1').val('');
    $('#textarea1').trigger('autoresize');
    $('#title').val('');
    $('#title').trigger('autoresize');
    $(".button-collapse").sideNav();
  })


</script>
</body>
</html>