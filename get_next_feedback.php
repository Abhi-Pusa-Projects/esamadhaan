<?php
  $dbHost='localhost';
  $dbname='esamaadhaan';
  $dbUser='user_esamaadhaan';
  $dbPass='ashesh@123';

  try {
    $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
  } catch (PDOException $e) {
    echo "Error in conencting to database";
    echo $e->getMessage();
  }
    if(!isset($_POST['timestamp'])||$_POST['timestamp']=='timeStamp')
    {
      $timestamp = date("Y-m-d h:i:sa");
    }
    else{
      $timestamp = $_POST['timestamp'];
    }

    if($_POST['data_flow']=='prev'){
      $sql = "SELECT * FROM feedback_det WHERE timestamp>'".$timestamp."'ORDER BY timestamp ASC LIMIT 5";
    }
    else{
      $sql = "SELECT * FROM feedback_det WHERE timestamp<'".$timestamp."'ORDER BY timestamp DESC LIMIT 5";
    }


  $table_str="<table>";
  $table_str.="<tr><td>FirstName</td><td>Last Name</td><td>Email</td><td>Rating</td><td>Comment</td><td>timeStamp</td>";
  foreach($conn->query($sql) as $rows){
    $table_str.="<tr><td>".$rows["f_name"]."</td><td>".$rows["l_name"]."</td><td>".$rows["email"]."</td><td>".$rows["rating"]."</td><td>".$rows["comment"]."</td><td>".$rows["timestamp"]."</td>";

  }
  $table_str.="</table>";
  echo $table_str;
?>
