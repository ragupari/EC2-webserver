<?php   
session_start();
include('connection.php');  

if(isset($_POST['sign_in_btn'])){
    $username = $_POST['user'];  
    $password = $_POST['pass']; 
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  

    $sql = "select * from users where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }    
}

if(isset($_POST['sign_up_btn'])){
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $sign_up_user = mysqli_real_escape_string($con, $_POST['sign_up_user']);
    $sign_up_pass = mysqli_real_escape_string($con, $_POST['sign_up_pass']);
    echo "<h1><center> Login successful </center></h1>";  

    // Check Email
    $checkemail = "SELECT username FROM users WHERE username='$sign_up_user' LIMIT 1";
    $checkemail_run = mysqli_query($con, $checkemail);

    if(mysqli_num_rows($checkemail_run) > 0){
        // Already Exists
        echo "<h1><center> Username already exists! </center></h1>";  
        header("Location: sign-up.php");
        exit(0);
    }
    else{
        $user_query = "INSERT INTO users (username,password, fname, lname) VALUES ('$sign_up_user','$sign_up_pass', '$fname', '$lname')";
        $user_query_run = mysqli_query($con, $user_query);

        if($user_query_run){
            echo "<h1><center> Successfully registered! </center></h1>";  
            header("Location: sign-in.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Something Went Wrong!";
            header("Location: sign-up.php");
            exit(0);
        }
    }
}
?>  
