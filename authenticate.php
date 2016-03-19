<?php
  echo "We are calling from authenticate.php";
  $username = $_POST['user'];
  $password = $_POST['pass'];
   echo $username;
   echo $password;

  //setting the variable for database connection_status
  $dbHost="localhost";
  $dbname="esamaadhaan";
  $dbUser="abhinav";
  $dbPass="ashesh";

  try {
    $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
    $stmt = $conn->prepare("SELECT * FROM users where username=:username");
    //echo $stmt;
    $stmt->execute(array(
      ":username"=>$username
    ));
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $fetchAll = $stmt->fetchAll();
    if ($fetchAll){
      // set the resulting array to associativ
      echo "inside fetch column";
      foreach(new RecursiveArrayIterator($fetchAll) as $k=>$v) {
          echo "username retireved is:".$v['username']."and password is:".$v['password'];
          if($v["username"]==$username && $v['password']==$password){
            echo "authenticated User";
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['admin']=$v['admin'];
            header("Location:./index.php");
          }
          else{
            header("Location:./login.php?message=WrongPassword");
            echo "Non Authenticated User";
          }
      }
    }
    else{
      header("Location:./login.php?message=UserNotFound");
    }


  } catch (Exception $e) {
    echo $e->getMessage();
    header("Location:./login.php?message=DbNotConnected");

  }

 ?>
