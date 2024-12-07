<?php

include("db.php");
include_once('functions.php');
sec_session_start();

if (login_check($db) != true) 
{
  header("Location: login.php");
  exit();
}

  $id = $_GET['edit'];

 
  $query = "SELECT * FROM jobs WHERE id = $id";
  $result = mysqli_query($db,$query);
  //returning data
  $row = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" media="screen,projection">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
  <title>Edit a Post</title>
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
  padding-bottom: 20px;
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


<!--
<div class="container">
<form method="post" action="update.php">
<input type="hidden" class="form-control" name="id" value="<?php #echo $row['id'];?>"><br />
<label class="lead">Enter new title:</label> <input type="text" class="form-control" name="title" value="<?php #echo $row['title'];?>"><br />
<label class="lead">Enter new content:</label> <textarea type="text" class="form-control" name="content" rows="10" value="<?php #echo $row['content'];?>"></textarea><hr />

<input type="submit" name="submit" value="Save" class="btn-lg btn btn-info"/>
</form>
</div>-->

<div class="container" style="margin-bottom: 40px;">
<p style="margin-top: 20px" class="center flow-text">Edit "<?php echo $row['title'];?>" Job!</p>
<div class="row">
                   
                </div>
  <div class="row">
    <form class="col s12" action="update_job.php" method="POST" role="form" enctype="multipart/form-data">
  <div class="row">
        <div class="input-field col s12">
          <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>"><br />
          <input id="title" type="text" name="title" value="<?php echo $row['title'];?>" class="validate">
          <label for="title">Enter New Title</label>
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" type="text" class="materialize-textarea validate" name="content" rows="10" > <?php echo htmlspecialchars($row['content'], ENT_QUOTES, 'UTF-8');?></textarea>
          <label for="textarea1">Enter New Content</label>
        </div>
     </div>
     <input name="submit" type="submit" value="Edit it!" class="waves-effect waves-light btn">
    </form>
  </div>
</div>

<script>
  $( document ).ready(function(){
    $('#textarea1').val('<?php echo $row['content'];?>');
    $('#textarea1').trigger('autoresize');
    $('#title').val('<?php echo $row['title'];?>');
    $('#title').trigger('autoresize');
    $(".button-collapse").sideNav();
  })
</script>
<footer class="page-footer">
        
          <div class="footer-copyright">
            <div class="container">
            &copy; 2024 BluDive
          
            </div>
          </div>
        </footer>
</body>
</html>
<?php
mysqli_close($db);
?>