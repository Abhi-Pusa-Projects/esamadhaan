<?php
  require './PHPMailer_5.2.4/PHPMailer_5.2.4/class.phpmailer.php';
  echo "Calling from create User.php";
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $firstName = $_POST['f_name'];
  $lastName = $_POST['l_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['loc'];
  $admin=0;

  //setting the variables for connecting to the database
  $dbHost='localhost';
  $dbUser="user_esamaadhaan";
  $dbPass="ashesh@123";
  $dbname="esamaadhaan";

  try {
    $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
    $sql = "INSERT INTO users(f_name,l_name,email,phone,location,admin,username,password) VALUES(:f_name,:l_name,:email,:phone,:location,:admin,:username,:password);";
    $query=$conn->prepare($sql);
    $result=$query->execute(array(
                              ":f_name"=>$firstName,
                              ":l_name"=>$lastName,
                              ":email"=>$email,
                              ":phone"=>$phone,
                              ":location"=>$location,
                              ":admin"=>$admin,
                              ":username"=>$username,
                              ":password"=>$password
    ));
    if($result){

      $mail = new PHPMailer;
      $mail->IsSMTP();
      $mail->SMTPDebug = 1;
      $mail->SMTPAuth = true;                                   // Set mailer to use SMTP
      $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup server
      $mail->Port=465;
      $mail->IsHTML(true);                              // Enable SMTP authentication
      $mail->Username = 'esamadhaan.abhinav@gmail.com';                            // SMTP username
      $mail->Password = 'Lmurugan@123';                           // SMTP password
      $mail->SetFrom = 'esamadhaan.abhinav@gmail.com';
      $mail->Subject = 'New User has been created';
      $mail->Body    =       '<p>
                                  Hi ' .$firstName.
                              ',</p>
                              <p>
                                  new user with the username '.$username.' has been created in esamadhaan.com.
                              </p>
                              <p>
                                  Thanks for joining us
                              </p>
                              <p>
                                  Regards,<br>
                                  Esamadhaan Team<br>
                                  Bangalore India<br>
                              </p>';
      $mail->AddAddress($email);               // Name is optional

      if(!$mail->Send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
         exit;
      }
      //echo 'Message has been sent';
      header("Location:./signup.php?message=User Created Successfully");
    }
    else{
      header("Location:./signup.php?message=User Not Created");
    }
  } catch (Exception $e) {
    header("Location:./signup.php?message=DB not connected");
  }

 ?>
