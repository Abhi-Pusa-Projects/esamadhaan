<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/110912-font-awesome/font/flaticon.css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php include "header.php"?>
    <form action="createUser.php" method="post">
    <div class="row" id="signup_div">
        <span>Sign-Up</span><br>
        <div class="col-sm-6">
            <input type="text" class="signup_input" placeholder="Enter Username" name="user" />
        </div>
        <div class="col-sm-6">
            <input type="password" class="signup_input" placeholder="Enter Password" name="pass" />
        </div>

        <div class="col-sm-6">
            <input type="text" class="signup_input" placeholder="First Name" name="f_name" />
        </div>
        <div class="col-sm-6">
            <input type="text" class="signup_input" placeholder="Last Name" name="l_name" />
        </div>
        <div class="col-sm-12">
            <input type="text" class="signup_input1" placeholder="Email ID" name="email" /><br>
        </div>
        <div class="col-sm-6">
            <input type="text" class="signup_input" placeholder="Phone No." name="phone"/><br>
        </div>
        <div class="col-sm-6">
            <input type="text" class="signup_input" placeholder="Location" name="loc"/><br>
        </div>
        <div class="col-sm-12">

            <input type="submit" class="signup_input1"></input>
            <div class="alert alert-info signup_input1" role="alert">
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

    </div>
    </form>
    <?php include "footer.php"?>
  </body>
</html>
