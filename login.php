<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/110912-font-awesome/font/flaticon.css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php include "header.php"?>
    <form action="authenticate.php" method="post">
    <div class="row" id="login_div">
        <span>Member Login</span><br>
        <input type="text" class="login_input" placeholder="Enter Username" name="user" /><br>
        <input type="password" class="login_input" placeholder="Enter Password" name="pass" /></br>
        <input type="submit" class="login_input"></input><br>
        <a href="get_password.php"><span class="glyphicon glyphicon-off"></span>Forgotten Your Password?</a><br><br>
        <div class="alert alert-info" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php

            if(isset($_GET['message'])){
              $message=$_GET['message'];
              echo $message;
            }
            //echo "<script type='text/javascript'>alert(".$message.")</script>"
          ?><br>
        </div>
    </div>
    </form>
    <?php include "footer.php"?>
  </body>
</html>
