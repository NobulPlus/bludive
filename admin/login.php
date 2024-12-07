<?php
include_once 'db.php';
include_once 'functions.php'; 
sec_session_start();
 
if (login_check($db) == true) {
    $logged = 'in';
    header('Location: index.php');
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure Login: Log In</title>
    <link rel="stylesheet" href="styles/main.css" />
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .nav-wrapper, .footer-copyright, footer.page-footer {
            background-color: #0d47a1;
        }
        .container {
            margin-top: 50px;
        }
        .error {
            color: red;
            font-weight: bold;
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
                <li><a href="login.php">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav> 

    <div class="container">
     
        <form action="process_login.php" method="post" name="login_form"> 
            <div class="row">
                <div class="col s12 m6 offset-m3">
                <?php
        if (isset($_GET['error'])) {
            echo '<p class="error" style="margin-bottom: 20px;">Invalid login details! Please try again</p>';
        }
        ?> 
                    <div class="card darken-1" style="border-radius: 8px;">
                        <div class="card-content">
                            <span class="card-title">Login</span>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="email" id="email" class="validate"/>
                                    <label for="email">Enter Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="password" id="password" class="validate"/>
                                    <label for="password">Enter Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <button type="button" onclick="formhash(this.form, this.form.password);" class="waves-effect waves-light btn">Login</button>
                                </div>
                            </div>
                            <!-- <a href="register.php" class="btn waves-effect waves-light">Register</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <script>
        $(document).ready(function(){
            $('#email').val('');
            $('#password').trigger('autoresize');
            $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>
