<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Esamaadhaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/110912-font-awesome/font/flaticon.css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include 'header.php'?>
    <div class="row" style="text-align:center">
      <div class="col-sm-4" style="margin:auto">
      </div>
      <div class="col-sm-4" style="margin:auto">
      <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php
        require './PHPMailer_5.2.4/PHPMailer_5.2.4/class.phpmailer.php';
        //echo "we are calling from createservices.php page";
        $firstName = $_POST['f_name'];
        $lastName=$_POST['l_name'];
        $email=$_POST['email'];
        $serviceType=$_POST['service_type'];
        $serviceName=$_POST['service_name'];
        $address=$_POST['address'];
        $timestamp=date('Y-m-d h:i:sa');


        $dbHost="localhost";
        $dbname="esamaadhaan";
        $dbUser="user_esamaadhaan";
        $dbPass="ashesh@123";

        try {
          $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
          $sql="INSERT INTO requested_services(f_name,l_name,email,services_type,services_name,address,username,timestamp) VALUES(:f_name,:l_name,:email,:services_type,:services_name,:address,:username,:timestamp);";
          $query= $conn->prepare($sql);
          $result=$query->execute(array(
                                      ":f_name"=>$firstName,
                                      ":l_name"=>$lastName,
                                      ":email"=>$email,
                                      ":services_type"=>$serviceType,
                                      ":services_name"=>$serviceName,
                                      ":address"=>$address,
                                      ":username"=>$_SESSION['username'],
                                      ":timestamp"=>$timestamp
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
            $mail->Subject = 'New request has been created';
            $mail->Body    =       '<p>
                                        Hi ' .$firstName.
                                    ',</p>
                                    <p>
                                        new request for '.$serviceType.' and '.$serviceName.' has been created in esamadhaan.com by user.'.$_SESSION['username'].'
                                    </p>
                                    <p>
                                        We will get back to you soon
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
            //header("Location:./signup.php?message=User Created Successfully");
            echo "data added correctly into database";
          }
          else{
            echo "data not added correctly in to databases";
          }

        } catch (PDOException $e) {
          echo "error in adding data into database";
          echo $e->getMessage();
        }
        ?><br>
      </div>
      </div>
      <div class="col-sm-4" style="margin:auto">
      </div>
    </div>
    <div class="row" style="padding-left:80px;padding-right:80px;">
      <div class="col-sm-12" id="services_det_table">
        <?php
          $table_str="<table>";
          $table_str .= "<tr><td>Full Name</td><td>Email</td><td>Services Type</td><td>Services Name</td><td>Address</td><td>Username</td><td>TimeStamp</td>";
          if($_SESSION['admin']==1)
            $select_stmt= "SELECT * FROM requested_services ORDER BY timestamp DESC LIMIT 5;";
          else{
            $select_stmt= "SELECT * FROM requested_services WHERE username='".$_SESSION['username']."'ORDER BY timestamp DESC LIMIT 5";
          }
          foreach($conn->query($select_stmt) as $rows){
            $table_str .= "<tr><td>".$rows['f_name']." ".$rows['l_name']."</td><td>".$rows['email']."</td><td>".$rows['services_type']."</td><td>".$rows['services_name']."</td><td>".$rows['address']."</td><td>".$rows['username']."</td><td>".$rows['timestamp']."</td></tr>";
          }
          $table_str.="</table>";
          echo $table_str;
        ?>
      </div>
      <div class="col-sm-12">
          <button id="services_prev" class="glyphicon glyphicon-menu-left pull-left"></button>
          <button id="services_next" class="glyphicon glyphicon-menu-right pull-right"></button>
      </div>
    </div>
    <?php include 'footer.php'?>
  </body>
</html>
