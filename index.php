<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Esamaadhaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/110912-font-awesome/font/flaticon.css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>

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
        <a class="navbar-brand" href="#">ESAMAADHAAN</a>
      </div>

     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Workshop</a></li>
            <li><a href="#">STP/WTP</a></li>
            <li><a href="#">Corporate Training</a></li>
          </ul>
        </li>
        <li><a href="#">Upcoming Programs</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Blog</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Sponsorship</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  <!--navbar code ends here-->

<div id="corousel_container">
  <!--bootstrap corousel goes here-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img id="courosel_img1" src="./img/corousel_image1.jpg" alt="Chania">
      </div>

      <div class="item">
        <img id="courosel_img2" src="./img/corousel_image2.jpg" alt="Chania">
      </div>

      <div class="item">
        <img  id="courosel_img3" src="./img/corousel_image3.jpg" alt="Flower">
      </div>

      <div class="item">
        <img id="courosel_img4" src="./img/corousel_image4.jpg" alt="Flower">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  <!--bootstrap corousel ends here-->
</div>

<!--about the site section wrapper-->
<div class="row" id="site_details_wrapper">
  <div class="col-sm-5 first_nav_tab">
    <ul class="nav nav-pills nav-stacked">
      <li role="presentation">
        <a href="#">
          <div class="row">
            <div class="col-sm-4 image_div">
              <img src="./img/car-in-a-garage.png" alt="can in garage" style="height:70px;width:70px;margin:0px;margin-left:15px"/>
            </div>
            <div class="col-sm-8 details_div">
              This is a description of the home page
            </div>
          </div>
        </a>
      </li>
      <li role="presentation">
        <a href="#">
          <div class="row">
            <div class="col-sm-4 image_div">
              <img src="./img/working-team.png" alt="can in garage" style="height:70px;width:70px;margin:0px;margin-left:15px"/>
            </div>
            <div class="col-sm-8 details_div">
              This is a description of the home page1
            </div>
          </div>
        </a>
      </li>
      <li role="presentation">
        <a href="#">
          <div class="row">
            <div class="col-sm-4 image_div">
              <img src="./img/car-wheel.png" alt="can in garage" style="height:70px;width:70px;margin:0px;margin-left:15px"/>
            </div>
            <div class="col-sm-8 details_div">
              This is a description of the home page2
            </div>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <div class="col-sm-5">
    <h1>Why choose us?</h1>
    <h1>Hands-On Experience</h1>
    <p>
      Tell me and I'll forget, teach me and I'll remember, involve me and I'll
      learn.Each program is designed by our experienced team by keeping in mind
       the current scenario and needs of automotive Industry.The objective of
       these programs is to provide hands-on experience to participants which
       will play vital role in their industrial career.
    </p>
    <button type="button" class="btn btn-danger">Action</button>
  </div>
  <div class="col-sm-2 first_nav_tab">
    <button type="button" class="btn btn-primary"><img style="height:15px;width:15px" src="./img/facebook-logo.jpg" alt="facebook-logo"/>&nbsp;Like</button>
    <button type="button" class="btn btn-primary">Share</button><br>
    9,353 people like this. Be the first of your friends.
  </div>
</div>
<!--end of the about the site section wrapper-->

<!--seperator between two sections-->
<div class="row" id="seperator1">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="position:relative;margin-top:20px;text-align:center" >
    <hr><hr>
    <img src="./img/wrench.png" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
    <br>
    <h1>Our Services</h1>
    <p>
      Below are the services that is provided by us.
    </p>
  </div>
  <div class="col-sm-2">
  </div>
</div>
<!--end of the seperator section-->

<div class="container">
  <div class="row" id="service_details">
    <div class="col-sm-4 service_details1" style="background-image:url(./img/car_parts.jpg)">
      <h1>Heading1</h1>
      <p>
        Tell me something about this page
      </p>
    </div>
    <div class="col-sm-4 service_details1" style="background-image:url(./img/carparts1.jpg)">
      <h1>Heading1</h1>
      <p>
        Tell me something about this page
      </p>
    </div>
    <div class="col-sm-4 service_details1" style="background-image:url(./img/carparts3.jpg)">
      <h1>Heading1</h1>
      <p>
        Tell me something about this page
      </p>
    </div>
  </div>
</div>

<!--seperator between two sections-->
<div class="row" id="seperator2">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="position:relative;margin-top:20px;text-align:center" >
    <hr><hr>
    <img src="./img/computer-settings.png" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
    <br>
    <h1>Gallery</h1>
    <p>
      All the awsome moments is captured in this section.
    </p>
  </div>
  <div class="col-sm-2">
  </div>
</div>
<!--end of the seperator section-->

<!--gallery section starts here-->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop1.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop2.jpg" alt="" style="height:250px;width:331px" />
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop3.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
  </div>
</div>
<!--end of gallery section-->

<!--start of feedback section-->
<div class="row">
  <div class="col-sm-6 feedback_left">
    <img src="./img/feedback_image.jpg" alt="feedback image" style="width:100%;height:405px"/>
  </div>
  <div class="col-sm-6 feedback_right">
    <h1>Write a FeedBack</h1>
    <form class="feedback_form" action="feedback.php" method="post">
      <div class="row">
        <div class="col-sm-6 div_feedback">
          <input type="text" class="input_form" name="f_name" placeholder="First Name">
        </div>
        <div class="col-sm-6 div_feedback">
            <input type="text" class="input_form" name="l_name" placeholder="Last Name">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 div_feedback">
          <input type="text" class="input_form" name="email" placeholder="Email"><br>
        </div>
        <div class="col-sm-6 div_feedback">
          <select name="rating" class="input_form">
            <option>Excellent</option>
            <option>Good</option>
            <option>Average</option>
            <option>Poor</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 div_feedback">
          <textarea name="comment" class="input_form1" rows="6" cols="40" placeholder="Enter Your Comment"></textarea><br>
          <button type="submit" class="btn btn-primary input_form1" name="button">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!--seperator between two sections-->
<div class="row" id="seperator3">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="position:relative;margin-top:20px;text-align:center" >
    <hr><hr>
    <img src="./img/signing-the-contract.png" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
    <br>
    <h1>News and Testimony</h1>
    <p>
      Latest news and testimonies are given here
    </p>
  </div>
  <div class="col-sm-2">
  </div>
</div>
<!--end of the seperator section-->

<!--news section starts here-->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop1.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop2.jpg" alt="" style="height:250px;width:331px" />
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop3.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
  </div>
</div>
<!--end of news section-->

<!--seperator between two sections-->
<div class="row" id="seperator3">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="position:relative;margin-top:20px;text-align:center" >
    <hr><hr>
    <img src="./img/car.png" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
    <br>
    <h1>Upcoming Programs</h1>
    <p>
      Belaw are the main upcoming programs that we are hosting
    </p>
  </div>
  <div class="col-sm-2">
  </div>
</div>
<!--end of the seperator section-->


<!--starts of upcoming events here-->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop1.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop2.jpg" alt="" style="height:250px;width:331px" />
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop3.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-footer">Panel footer</div>
      </div>
    </div>
  </div>
</div>
<!--end of upcoming events section-->


</body>
</html>
