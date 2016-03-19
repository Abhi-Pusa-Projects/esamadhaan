<?php
  session_start();
  $dbHost='localhost';
  $dbname='esamaadhaan';
  $dbUser='user_esamaadhaan';
  $dbPass='ashesh@123';
  // echo $_SESSION['username'];
  // echo $_SESSION['admin'];

  try {
    $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
  } catch (PDOException $e) {
    echo "Error in conencting to database";
    echo $e->getMessage();
  }
    if(!isset($_POST['timestamp'])||$_POST['timestamp']=='TimeStamp')
    {
      $timestamp = date("Y-m-d h:i:sa");
    }
    else{
      $timestamp = $_POST['timestamp'];
    }

    if($_POST['data_flow']=='prev'){
      if($_SESSION['admin']==1)
        $select_stmt= "SELECT * FROM requested_services WHERE timestamp>'".$timestamp."'ORDER BY timestamp ASC LIMIT 5;";
      else{
        $select_stmt= "SELECT * FROM requested_services WHERE timestamp>'".$timestamp."'&& username='".$_SESSION['username']."'ORDER BY timestamp ASC LIMIT 5;";
      }
    }
    else{
      if($_SESSION['admin']==1)
        $select_stmt= "SELECT * FROM requested_services WHERE timestamp<'".$timestamp."'ORDER BY timestamp DESC LIMIT 5;";
      else{
        $select_stmt= "SELECT * FROM requested_services WHERE timestamp<'".$timestamp."'&& username='".$_SESSION['username']."'ORDER BY timestamp DESC LIMIT 5;";
      }
    }

    $table_str="<table>";
    $table_str .= "<tr><td>Full Name</td><td>Email</td><td>Services Type</td><td>Services Name</td><td>Address</td><td>Username</td><td>TimeStamp</td>";

    foreach($conn->query($select_stmt) as $rows){
      $table_str .= "<tr><td>".$rows['f_name']." ".$rows['l_name']."</td><td>".$rows['email']."</td><td>".$rows['services_type']."</td><td>".$rows['services_name']."</td><td>".$rows['address']."</td><td>".$rows['username']."</td><td>".$rows['timestamp']."</td></tr>";
    }
    $table_str.="</table>";
    echo $table_str;
?>
