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
      <?php include 'header.php'?>
      <div class="container">
        <div class="row" id="feedback_status">
          <?php

            //echo $timestamp;

            //setting of database connection variables to connect with database
            $dbHost='localhost';
            $dbUser='user_esamaadhaan';
            $dbPass='ashesh@123';
            $dbname = 'esamaadhaan';
            //below code will insert the data into the database
            try {
              $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
              if(!isset($_POST['data_flow']) && isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['email']) && isset($_POST['rating']) && isset($_POST['comment']) ){
                $first_name = $_POST['f_name'];
                $last_name = $_POST['l_name'];
                $email = $_POST['email'];
                $rating= $_POST['rating'];
                $comment = $_POST['comment'];
                $timestamp = date("Y-m-d h:i:sa");
                $sql="INSERT INTO feedback_det(f_name,l_name,email,rating,comment,timestamp) VALUES(:f_name,:l_name,:email,:rating,:comment,:timestamp);";
                $query=$conn->prepare($sql);
                $result = $query->execute(array(
                ":f_name"=>$first_name,
                ":l_name"=> $last_name,
                ":email"=>$email,
                ":rating"=>$rating,
                ":comment"=>$comment,
                ":timestamp"=>$timestamp
                ));

                if($result){
                  echo "Thanks for your feedback";
                }
                else{
                  echo "Feedback is not submitted. Try again";
                }
            }
            } catch (PDOException $e) {
                echo "Error in connecting to server";
                echo "Error".$e->getMessage();
            }
          ?>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12" id="feedback_data">
            <?php
              // if(!isset($_POST['data_flow']) && !isset($_POST['timestamp'])){
              //   $timestamp = date("Y-m-d h:i:sa");
                $sql = "SELECT * FROM feedback_det ORDER BY timestamp DESC LIMIT 5";
              //}
              $table_str="<table>";
              $table_str.="<tr><td>FirstName</td><td>Last Name</td><td>Email</td><td>Rating</td><td>Comment</td><td>timeStamp</td>";
              foreach($conn->query($sql) as $rows){
                $table_str.="<tr><td>".$rows["f_name"]."</td><td>".$rows["l_name"]."</td><td>".$rows["email"]."</td><td>".$rows["rating"]."</td><td>".$rows["comment"]."</td><td>".$rows["timestamp"]."</td>";

              }
              $table_str.="</table>";
              echo $table_str;
            ?>
          </div>
          <div class="col-sm-12">
              <button id="feedback_prev" class="glyphicon glyphicon-menu-left pull-left"></button>
              <button id="feedback_next" class="glyphicon glyphicon-menu-right pull-right"></button>
          </div>
        </div>
      </div>

      <?php include 'footer.php'?>
    </body>
  </html>
