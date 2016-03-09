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
        $first_name = $_POST['f_name'];
        $last_name = $_POST['l_name'];
        $email = $_POST['email'];
        $rating= $_POST['rating'];
        $comment = $_POST['comment'];

        //code that validates the data in taken from UI
        if(!isset($first_name)){
          die("Firstname is not set");
        }
        if(!isset($last_name)){
          die("lastname is not set");
        }
        if(!isset($email)){
          die ("Email is not set");
        }
        if(!isset($rating)){
          die ("Rating is not set");
        }
        if(!isset($comment)){
          die ("Comment is not set");
        }
        //setting of database connection variables to connect with database
        $dbHost='localhost';
        $dbUser='abhinav';
        $dbPass='ashesh';
        $dbname = 'esamaadhaan';
        //below code will insert the data into the database
        try {
          $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
          $sql="INSERT INTO feedback_det(f_name,l_name,email,rating,comment) VALUES(:f_name,:l_name,:email,:rating,:comment);";
          $query=$conn->prepare($sql);
          $result = $query->execute(array(
          ":f_name"=>$first_name,
          ":l_name"=> $last_name,
          ":email"=>$email,
          ":rating"=>$rating,
          ":comment"=>$comment
          ));

          if($result){
            echo "Data got added successfully";
          }
          else{
            echo "data not get added successfully";
          }
        } catch (PDOException $e) {
            echo "Error".$e->getMessage();
        }

        // $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
        // $sql = "SELECT * FROM feedback_det";
        // foreach($conn->query($sql) as $rows){
        //   echo $rows["f_name"]."has sirname".$rows["l_name"];
        // }
      ?>
      <?php include 'footer.php'?>
    </body>
  </html>
