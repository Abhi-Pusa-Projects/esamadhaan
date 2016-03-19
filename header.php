<?php session_start()?>
<div class="row" id="login_row_header">
  <div class="pull-left" style="margin-left:20px;margin-top:13px;">
        <?php
          if( isset($_SESSION['username']))
          echo "WELCOME ".$_SESSION['username'];
        ?>
  </div>
  <div class="pull-right" id="login_header">
    <?php
      if( isset($_SESSION['username']))
      {
        echo '<a href="./logout.php"> <span class="glyphicon glyphicon-log-out"></span>&nbspLogOut</a>';
      }
      else{
        echo '<span class="glyphicon glyphicon-user"></span><a href="./login.php">Member Login </a>/<a href="./signup.php"> SignUp </a>';
      }
    ?>

  </div>
</div>

<!--navbar code starts here-->
<nav class="navbar navbar-default">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">e-samaadhaan</a>
  </div>

 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="./index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
    <li class="dropdown">
      <a href="./index.php#seperator" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Services <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="./services.php#industrial_header">Industrial</a></li>
        <li><a href="./services.php#domestic_header">Domestic</a></li>
        <!-- <li><a href="#">Corporate Training</a></li> -->
      </ul>
    </li>
    <li><a href="./index.php#seperator4"><span class="glyphicon glyphicon-glass"></span>&nbsp;Upcoming Programs</a></li>
    <li><a href="./index.php#seperator2"><span class="glyphicon glyphicon-picture"></span>&nbsp;Gallery</a></li>
    <!-- <li><a href="#">Blog</a></li> -->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-edit"></span>&nbsp;More <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Sponsorship</a></li>
        <li><a href="./index.php#seperator3">Testimonials</a></li>
        <!-- <li><a href="#">Careers</a></li> -->
        <li><a href="#">Contact Us</a></li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!--navbar code ends here-->
