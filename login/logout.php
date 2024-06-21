<?php
    session_start();
    $_SESSION["username"] = "";
    session_destroy();
    session_start();
    $_SESSION['fail_msg'] = "You have been logged out." ;
    header("Location: /index.php");
   
    exit();
?>