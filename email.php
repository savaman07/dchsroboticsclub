<?php
  if(empty($_POST) === false) {
      $error = array();
      
      $ip = $_SERVER['REMOTE_ADDR'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'] . $ip;
      
      
          if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
             $err = 2;
             $error = 'Incorrect email';  
          }
          if (ctype_alpha($name) === false) {
             $err = 2;
             $error = 'Incorrect Name';  
          }
          if (empty($error) === true) {
              mail('blakehastings@outlook.com', 'DCHS Contact Form', $message, 'From:' . $email);
              header('Location: index.php?em=1');
              exit();
          }
      
      echo "<script type='text/javascript'> document.location = 'index.php?em=".$err."'; </script>";
      
  } else {
echo "<script type='text/javascript'> document.location = 'index.php?em=2'; </script>";
  }
//<script type='text/javascript'> document.location = 'index.php?result=2'; </script>
?>