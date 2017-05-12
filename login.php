<?php
session_start();
extract($_POST);
if(isset($username)&&isset($password)){
    if($username == "logout27" && $password == "TuyM0ve"){
        $_SESSION['login']= md5(session_id().'TuyMove');
        header( "location: index.php" );
        
    }
}
?>
  <!DOCTYPE html>
  <html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบสุ่มรางวัล</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css" />

  </head>

  <body>
    <section class="container">
      <section class="login-form">
        <form method="post" action="" role="login">
          <img src="img/logo.png" width="150px" class="img-responsive" alt="" />
          <input type="text" name="username" placeholder="Username" required class="form-control input-lg" />
          <input type="password" name="password" placeholder="Password" required class="form-control input-lg" />
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
        </form>
      </section>
    </section>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>

  </html>