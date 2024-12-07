<?php
include_once('db.php');
include_once('functions.php');

sec_session_start();

if (login_check($db) != true) {
  header('Location: login.php');
  exit(); // Ensure the script stops executing after the redirect
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
  <title>Admin Portal</title>
  <style type="text/css">
    body {
      background-color: #f5f5f5;
      color: #424242;
      font-family: 'Poppins', sans-serif;
    }
    .nav-wrapper, .footer-copyright, footer.page-footer {
      background-color: #0d47a1;
      padding-bottom: 20px;
    }
    .card {
      background-color: #ffffff;
      border-radius: 8px;
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    .card .card-content {
      flex-grow: 1;
      color: #424242;
    }
    .card-action .btn {
      margin: 5px 0;
    }
    .page-footer .container {
      color: #ffffff;
    }
    .brand-logo {
      font-size: 1.8rem;
      font-weight: bold;
    }

    .card-title
    {
    text-align: center;
    display: block;
    font-size: 22px !important;
    font-weight: 500 !important;
    }

    img{
      margin: 0 auto;
      display: block;
    width: -webkit-fill-available;
    object-fit: cover;
    border-radius: 8px;
    margin: 1rem 0px;
    }
  </style>
</head>
<body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  <nav>
    <div class="nav-wrapper">
     
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">All Posts</a></li>
        <li><a href="jobs.php">All Jobs</a></li>
        <?php if (login_check($db) == true): ?>
          <li><a href="add_job.php">Create New Job</a></li>
          <li><a href="logout.php">Log Out</a></li>
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
        <?php endif; ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">All Posts</a></li>
        <li><a href="jobs.php">All Jobs</a></li>  
        <?php if (login_check($db) == true): ?>
          <li><a href="add_job.php">Create New Job</a></li>  
          <li><a href="logout.php">Log Out</a></li>
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <div class="container" style="min-height: 82vh">
    <div class="row" style="margin-top: 40px;">
      <?php
      $sql = "SELECT * FROM jobs ORDER BY id DESC";
      $result = $db->query($sql);

      if (mysqli_num_rows($result) > 0):
        while ($row = mysqli_fetch_assoc($result)):
          $id = $row['id'];
          $title = $row['title'];
          $content = $row['content'];
          $date = $row['date'];
      ?>
        <div class="col s12 m6 l4">
          <div class="card darken-1">
            <div class="card-content">
              <span class="card-title"><?= (strlen($title) >15) ? htmlspecialchars(substr($title, 0, 15), ENT_QUOTES, 'UTF-8') . '...' : htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></span>
              <p>Date: <?= htmlspecialchars($date, ENT_QUOTES, 'UTF-8') ?></p>
              <p>Content: <?= htmlspecialchars(substr($content, 0, 20), ENT_QUOTES, 'UTF-8') ?>...</p>
            </div>
            <div class="card-action">
              <a href="delete_job.php?del=<?= $id ?>" class="waves-effect waves-light btn red darken-3">Delete</a>
              <a href="edit_job.php?edit=<?= $id ?>" class="waves-effect waves-light btn green darken-3">Edit</a>
            </div>
          </div>
        </div>
      <?php
        endwhile;
      endif;
      $db->close();
      ?>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-content">
            <span class="card-title flow-text">Create a Job</span>
          </div>
          <div class="card-action">
            <a href="add_job.php" class="waves-effect waves-light btn blue">Create New Job</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container" style="margin-bottom: 20px;">
        &copy; 2024 BluDive
      </div>
    </div>
  </footer>

  <script>
    $(document).ready(function() {
      $(".button-collapse").sideNav();
    });
  </script>
</body>
</html>
