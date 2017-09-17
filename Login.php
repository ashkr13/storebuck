<?php
session_start();
include ('dbcon.php');

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width", initial-scale=1 />
<title>Online shopping</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style12.css" />
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          
          <a class="navbar-brand" href="index.php"><span style="color:#099">STORE<span style="color:#FFFFFF">BUCK.in</a>
        </div>
    
        
       
      </div><!-- /.container -->
</nav><!-- /.navbar -->
    
    <br /><br />
    <div class="container">
  <div class="row">

    <div class="main">

      <h3> Log In </h3>
      
      

      <form method="post"action="login.php" role="form">
        <div class="form-group">
          <label for="inputUsernameEmail">Email</label>
          <input type="text" name="Email" class="form-control">
        </div>
        <div class="form-group">
          <a class="pull-right" href="ForgetPW.php">Forgot password?</a>
          <label for="inputPassword">Password</label>
          <input type="password" name="Password_1" class="form-control">
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" name="login" class="btn btn btn-primary">
          Let me in
        </button>
      </form>
    
    </div>
    <div class="col-md-12 text-center"><h3>New to Storebuck ?<br><a href="signup.php">Start here.</a></h3></div>

  </div>
</div><br />
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter">StoreBuck</div>
        <p>It all started with a great idea and a little hard work. today we're proud to provide quality products direct to you doorstep through an experiance .Call and Email us today to let us know what you think. we'd love to hear from you.</p>
        <p><i class="fa fa-map-pin"></i> Hazratgunj Lucknow, INDIA</p>
        <p><i class="fa fa-phone"></i> Phone (India) :+91-9897965332</p>
        <p><i class="fa fa-envelope"></i> E-mail :</p>
        
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Storebuck Business</h6>
        <ul class="footer-ul">
          <li><a href="#"> Career</a></li>
          <li><a href="#"> Privacy Policy</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
          <li><a href="#"> Seller Gateway</a></li>
          <li><a href="#"> Timeline</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Categories</h6>
        <ul class="footer-ul">
          <li><a href="#"> Books</a></li>
          <li><a href="#"> Shoes</a></li>
          <li><a href="#"> Electronics</a></li>
          <li><a href="#"> Accessories</a></li>
          <li><a href="#"> Fashion collection</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
      <h6>Keep in Touch</h6>
        <div class="social-icons">
                                
                                	<ul class="nomargin">
                                    
               <a href="https://www.facebook.com/storebuck/" target="_blank" class="icon fa fa-facebook-f"></a>
	            <a href="https://www.instagram.com/storebuck.in/" target="_blank" class="icon fa fa-instagram"></a>
                 
                    
                    <a href="" target="_blank" class="icon fa fa-pinterest"></a>
                    <a href="" target="_blank" class="icon fa fa-youtube-play"></a>

	           
                                    
                                    </ul>
                                </div>
                                
                                
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-4">
      <p>© 2017 - All Rights Reserved</p>
    </div>
    <div class="col-md-8">
      <ul class="bottom_ul">
        <li><a href="#">Storebuck.in</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Faq's</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Site Map</a></li>
      </ul>
    </div>
  </div>
</div>

    <script type="text/javascript" src="js/jquery.js.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>



<?php
 if(isset($_POST["login"])) 
 {
	 
	$Email = $_POST['Email'];
    $Password_1 = $_POST['Password_1'];

$sel_customer = "select * from signup where Email = '$Email' AND Password_1 = '$Password_1'";

$run_customer = mysqli_query($con, $sel_customer);
$check_customer = mysqli_num_rows($run_customer);




 }
 
 
 ?>
     