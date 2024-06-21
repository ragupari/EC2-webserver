<html>  
<head>  
    <title>Sign-up page</title> 
    <link rel = "stylesheet" type = "text/css" href = "../public/style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Sign Up</h1>  
        <?php 
            session_start();
            if (!empty($_SESSION['fail_msg'])) {
                echo '<p class="validation-message">' . $_SESSION['fail_msg'] . '</p>';
            }
            session_destroy();
        ?>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> First Name: </label>  
                <input type = "text" id ="fname" name  = "fname" />  
            </p>  
            <p>  
                <label> Last Name: </label>  
                <input type = "text" id ="lname" name  = "lname" />  
            </p> 
            <p>  
                <label> User Name: </label>  
                <input type = "text" id ="sign_up_user" name  = "sign_up_user" />  
            </p> 
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="sign_up_pass" name  = "sign_up_pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "sign_up_btn" value = "Sign up" name  = "sign_up_btn" />  
            </p>  
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var user=document.f1.sign_up_user.value;  
                var pass=document.f1.sign_up_pass.value;  
                var fname=document.f1.fname.value;  
                var lname=document.f1.lname.value;  
                if(user.length=="" || pass.length=="" || fname.length=="" || lname.length=="") {  
                    alert("None of the fields can be empty");  
                    return false;  
                }
                return true;                              
            }  
        </script>  
</body>     
</html>  