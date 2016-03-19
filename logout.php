<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php include 'header.php'?>
      <?php
      // remove all session variables
      session_unset();

      // destroy the session
      session_destroy();
      header('Location:./login.php');
      ?>
    <?php include 'footer.php'?>
</body>
</html>
