<html>  
<head>  
    <title>Sign-in page</title> 
    <link rel = "stylesheet" type = "text/css" href = "/Public/style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Sign In</h1>
         
        <?php 
            
            if (!empty($_SESSION['fail_msg'])) {
                echo '<p class="validation-message">' . $_SESSION['fail_msg'] . '</p>';
            }
       
        ?>
        
        <form name="f1" action = "/login/authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "sign_in_btn" name="sign_in_btn" value = "Sign In" />  
            </p>  
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Fields cannot be empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  