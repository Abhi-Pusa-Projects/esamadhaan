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
      <?php
        //taking the varibles into local variable obtained from UI
        $first_name = $_POST['f_name'];
        $last_name= $_POST['l_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message $_POST['message'];

        //initializing the db connection variables
        $dbHost='localhost';
        $dbUser='root';
        $dbPass='';
        $dbname="esamaadhaan"

        //connecting to the database using above varaibles in try catch block
        try {
          $conn=
        } catch (Exception $e) {

        }


      ?>
      <?php include 'footer.php'?>
    </body>
  </html>
