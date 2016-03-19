<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Esamaadhaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/110912-font-awesome/font/flaticon.css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>

   <header>
     <?php include 'header.php' ?>
   </header>

<div id="corousel_container">
  <!--bootstrap corousel goes here-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
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
      <div class="item">
        <img id="courosel_img5" src="./img/corousel_image5.jpg" alt="Flower">
      </div>
      <div class="item">
        <img id="courosel_img6" src="./img/corousel_image6.jpg" alt="Flower">
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
            <div class="col-sm-3 image_div">
              <img src="./img/car-in-a-garage.png" alt="can in garage" style="height:70px;width:70px;margin:0px;margin-left:15px"/>
            </div>
            <div class="col-sm-9 details_div">
              <h4>Heading1</h4>
              This is a description of the heading1 so that our site looks good
            </div>
          </div>
        </a>
      </li>
      <li role="presentation">
        <a href="#">
          <div class="row">
            <div class="col-sm-3 image_div">
              <img src="./img/working-team.png" alt="can in garage" style="height:70px;width:70px;margin:0px;margin-left:15px"/>
            </div>
            <div class="col-sm-9 details_div">
              <h4>Heading2</h4>
              This is a description of the heading2 so that our site looks cool
            </div>
          </div>
        </a>
      </li>
      <li role="presentation">
        <a href="#">
          <div class="row">
            <div class="col-sm-3 image_div">
              <img src="./img/car-wheel.png" alt="can in garage" style="height:70px;width:70px;margin:0px;margin-left:15px"/>
            </div>
            <div class="col-sm-9 details_div">
              <h4>Heading 3</h4>
              This is a description of the heading3 so that ou site looks cool
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
    <form action="./feedback.php" method="post">
        <button id="feedback_button" type="submit" class="btn btn-danger">Action</button>
    </form>
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
    <img src="./img/wrench.png" class="img-circle" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
    <br>
    <h1>Our Services</h1>
    <p>
      Below are the services provided by us.
    </p>
  </div>
  <div class="col-sm-2">
  </div>
</div>
<!--end of the seperator section-->

<div class="container-fluid">
  <div class="row" id="service_details">
    <div class="col-sm-6">
      <div class="service_details1" style="background:url(./img/car_parts.jpg) no-repeat center center;background-size:cover;">
        <h1 style="color:#000">Industrial Services</h1>
          <ul class="list-group" style="padding-top:30px;text-align:center">
            <a id="industrial_det" class="list-group-item">Fabricated Structures<span class="glyphicon glyphicon-menu-down pull-right"></span>
              <div id="slide_det" style="display:none;text-align:left"><b>Industrial Shed</b>
                <p>
                  We design and construct space effcient industrial shed. We deal with Rigid
                  frame structure,single spam shed, multi span shed, crane beams, mezzenine
                  systems, trosses, curved members(segmentor or continuous), fascios and conopies
                </p>
              </div>
            </a>
            <a href="./services.php#industrial_header" class="list-group-item">Towers and Platforms</a>
            <a href="./services.php#industrial_header1" class="list-group-item">Industrial parking shed</a>
            <a href="./services.php#industrial_header2" class="list-group-item">aluminium partitions</a>
            <a href="./services.php#industrial_header3" class="list-group-item">Internal and Enternal Pointings</a>
            <a href="./services.php#industrial_header4" class="list-group-item">Floor Works</a>
            <a href="./services.php#industrial_header5" class="list-group-item">Industrial Wiring</a>
            <a href="#" class="list-group-item">Panel Design And Installation</a>
            <a href="#" class="list-group-item">Solar Panal Installation</a>
          </ul>
      </div>
    </div>

    <!-- <div  class="col-sm-1 service_details2">
      <div id="seperator">
      </div>
    </div> -->
    <div class="col-sm-6">
      <div class="service_details1" style="background:url(./img/carparts1.gif) no-repeat center center;background-size: cover;">
        <h1 style="color:#000">Domestic Services</h1>
            <ul class="list-group" style="color:#003366;text-align:left;padding-top:30px;text-align:center">
              <a href="./services.php#domestic_header" class="list-group-item">Fabricated Structures(Gates and Windows)</a>
              <a href="./services.php#domestic_header1" class="list-group-item">Internal and External Paintings</a>
              <a href="#" class="list-group-item">Electrical Works</a>
              <a href="#" class="list-group-item">Plumbing Works</a>
              <a href="#" class="list-group-item">Fencing Works</a>
              <a href="#" class="list-group-item">Fabricated Railings</a>
            </ul>
      </div>
    </div>
    <div class="col-sm-12 service_details2">
      <a href="./services.php" class="btn btn-primary pull-right" style="background-color:gray;border:0px">Read More &nbsp;<span class="glyphicon glyphicon-arrow-right"><span></a>
    </div>
  </div>
</div>

<!--seperator between two sections-->
<div class="row" id="seperator4">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="position:relative;margin-top:20px;text-align:center" >
    <hr><hr>
    <img src="./img/car.png" class="img-circle" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
    <br>
    <h1>Upcoming Projects</h1>
    <p>
      Belaw are the main upcoming projects that we are going to start in recent history
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
          <img src="./img/upcoming_programs/program1.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-body">
          <h4>Motor Overhauling Program</h4>
        </div>
        <div class="panel-footer">Description of the program</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="./img/upcoming_programs/program2.jpg" alt="" style="height:250px;width:331px" />
        </div>
        <div class="panel-body">
          <h4>Upcoming Motor Houling Program</h4>
        </div>
        <div class="panel-footer">Description of program2</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="./img/upcoming_programs/program3.jpg" alt="" style="height:250px;width:331px"/>
        </div>
        <div class="panel-body">
          <h4>Motor Overhauling Program</h4>
        </div>
        <div class="panel-footer">Desciption of Program3</div>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <a href="./upcoming_programs.php" class="btn btn-primary pull-right" style="background-color:gray;border:0px">Read More &nbsp;<span class="glyphicon glyphicon-arrow-right"><span></a>
  </div>
</div>
<!--end of upcoming events section-->


<!--seperator between two sections-->
<div class="row" id="seperator2">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="position:relative;margin-top:20px;text-align:center" >
    <hr><hr>
    <img src="./img/computer-settings.png" class="img-circle" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
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
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Industrial Gallery</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop1.jpg" alt="" style="height:350px;width:525px"/>
        </div>
        <div class="panel-footer">Description of Gallery Image</div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Domestic Gallery</h3>
        </div>
        <div class="panel-body">
          <img src="./img/workshop2.jpg" alt="" style="height:350px;width:525px" />
        </div>
        <div class="panel-footer">Description of Gallery Image</div>
      </div>
    </div>
    <div class="col-sm-12">
      <a href="./gallery.php" class="btn btn-primary pull-right" style="background-color:gray;border:0px">Read More &nbsp;<span class="glyphicon glyphicon-arrow-right"><span></a>
    </div>
  </div>
</div>
<!--end of gallery section-->

<!--start of feedback section-->
<div class="row" id="feedback_col">
  <div class="col-sm-3 feedback_left">
    <!-- <img src="./img/feedback_image.jpg" alt="feedback image" style="width:100%;height:405px"/> -->
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
          <div class="col-sm-6">
            <fieldset id='demo1' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating" value="5.0" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4.0" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3.0" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2.0" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1.0" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>
          </div>
          <div class="col-sm-6">
            <label id="rate_val" name="rating" style="font-size:20px;padding-top:2px;"></label>
          </div>
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
  <div class="col-sm-3 feedback_left">
    <!-- <img src="./img/feedback_image.jpg" alt="feedback image" style="width:100%;height:405px"/> -->
  </div>
</div>

<!--seperator between two sections-->
<div class="row" id="seperator3">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="position:relative;margin-top:20px;text-align:center" >
    <hr><hr>
    <img src="./img/signing-the-contract.png" class="img-circle" alt="wrench" style="position:absolute;left:45%;top:-25px;height:80px;width:100px;background-color:white;padding:10px 20px"/>
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
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Industrial News</h3>
        </div>
        <div class="panel-body">
            <!--news corusel1 goes here-->
            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel1" data-slide-to="1"></li>
              <li data-target="#myCarousel1" data-slide-to="2"></li>
              <li data-target="#myCarousel1" data-slide-to="3"></li>
              <li data-target="#myCarousel1" data-slide-to="4"></li>
              <li data-target="#myCarousel1" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img id="courosel_img1" src="./img/corousel_image1.jpg" alt="Chania" style="height:350px">
              </div>

              <div class="item">
                <img id="courosel_img2" src="./img/corousel_image2.jpg" alt="Chania" style="height:350px">
              </div>

              <div class="item">
                <img  id="courosel_img3" src="./img/corousel_image3.jpg" alt="Flower" style="height:350px">
              </div>

              <div class="item">
                <img id="courosel_img4" src="./img/corousel_image4.jpg" alt="Flower" style="height:350px">
              </div>
              <div class="item">
                <img id="courosel_img5" src="./img/corousel_image5.jpg" alt="Flower" style="height:350px">
              </div>
              <div class="item">
                <img id="courosel_img6" src="./img/corousel_image6.jpg" alt="Flower" style="height:350px">
              </div>
            </div>

            <!-- Left and right controls -->
            <!--a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a-->
            </div>
          <!--bootstrap corousel ends here-->
        </div>
        <div class="panel-footer">Information about industrial news</div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Domestic News</h3>
        </div>
        <div class="panel-body">
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel2" data-slide-to="1"></li>
            <li data-target="#myCarousel2" data-slide-to="2"></li>
            <li data-target="#myCarousel2" data-slide-to="3"></li>
            <li data-target="#myCarousel2" data-slide-to="4"></li>
            <li data-target="#myCarousel2" data-slide-to="5"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img id="courosel_img1" src="./img/corousel_image1.jpg" alt="Chania" style="height:350px">
            </div>

            <div class="item">
              <img id="courosel_img2" src="./img/corousel_image2.jpg" alt="Chania" style="height:350px">
            </div>

            <div class="item">
              <img  id="courosel_img3" src="./img/corousel_image3.jpg" alt="Flower" style="height:350px">
            </div>

            <div class="item">
              <img id="courosel_img4" src="./img/corousel_image4.jpg" alt="Flower" style="height:350px">
            </div>
            <div class="item">
              <img id="courosel_img5" src="./img/corousel_image5.jpg" alt="Flower"style="height:350px">
            </div>
            <div class="item">
              <img id="courosel_img6" src="./img/corousel_image6.jpg" alt="Flower" style="height:350px">
            </div>
          </div>

          <!-- Left and right controls -->
          <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
          </div>
        <!--bootstrap corousel ends here-->
        </div>
        <div class="panel-footer">Information about Domestic news</div>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <a href="./news_testimony.php" class="btn btn-primary pull-right" style="background-color:gray;border:0px">Read More &nbsp;<span class="glyphicon glyphicon-arrow-right"><span></a>
  </div>
</div>
<!--end of news section-->

<footer>
  <?php include 'footer.php'?>
</footer>
</body>
</html>
