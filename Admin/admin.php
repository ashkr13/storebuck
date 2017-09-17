<?php
session_start();
include ('dbcon.php');

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN LOG</title>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width", initial-scale=1 />

<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css"  />
<style>
* {
	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

.login-form {
	margin: 100px auto;
	max-width: 366px;
}

form[role=login] {
	font: 18px/1.6em Lato, serif;
	color: #d5d5d5;
	background: #fff;
}	
	
	form[role=login] input,
	form[role=login] button {
		font-size: 16px;
		margin: 5px 0;
	}
	form[role=login] input {
		color: #d5d5d5;
		background: #fff;
		box-shadow: none;
		margin: 25px 0;
	}
		form[role=login] input::-webkit-input-placeholder {
			color: #c1c4c5;
		}
		form[role=login] input:-moz-placeholder {
			color: #c1c4c5;
		}
		form[role=login] input::-moz-placeholder {
			color: #c1c4c5;
		}
		form[role=login] input:-ms-input-placeholder {  
			color: #c1c4c5;
		}
		
	form[role=login] > div {
		margin-top: 20px;
	    }
		form[role=login] > div a {
			font-size: 15px;
			text-decoration: underline;
		}
</style>
</head>

<body>


<section class="container">
	    <section class="login-form">
        
        <center><h1>Admin login</h1></center>
		<form method="post" name="admin_form" action="" role="login">			
			<input type="text" name="user" placeholder="Username" required class="form-control input-lg" />
			<input type="password" name="pass" placeholder="Password" required class="form-control input-lg" />
			<button type="submit" name="login" class="btn btn-lg btn-block btn-info">Sign in</button>
			
		</form>
		</section>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<?php

 
if(isset($_POST["login"]))
{
	
$res=mysqli_query($con,"SELECT * FROM `admin` where username='$_POST[user]' AND password='$_POST[pass]'");
while($row=mysqli_fetch_array($res))
{
$_SESSION["admin"]=$row["username"];
	
	?>
    <script type="text/javascript">
	window.location="Dash.php";
	</script>
    <?php
	
	
}

}
?>



</body>
</html>

