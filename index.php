<?php
namespace Phppot;
session_start();
if (!empty($_SESSION["username"])) { 
	home();
}

else {
    require_once 'login/sign-in.php';
}
?>

<?php 
function home(){ 
	?>

<html>
<head>
<title>User Login</title>
<link href="public/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="phppot-container text-center">
			Welcome <b><?php echo $_SESSION["fname"]; ?></b>, You have successfully
			logged in!<br> Click to <a href="login/logout.php">Logout.</a>
	</div>
</body>
</html>

<?php }?>
