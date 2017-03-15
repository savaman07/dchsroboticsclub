
<?php

session_start();

require_once("../include/configdb.php");

    if(isset($_POST['uid'])) {    
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);   
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);   
        
        $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
            $result = mysqli_query($conn, $sql);

            if (!$row = mysqli_fetch_assoc($result)) {
           echo "<script type='text/javascript'> document.location = 'index.php?result=1'; </script>";    
    
            } else {
                $_SESSION['id'] = $row['id'];
                $_SESSION['uid'] = $row['uid'];
                echo "<script type='text/javascript'> document.location = 'index.php?result=2'; </script>";    
            }
    }
                
    

?>