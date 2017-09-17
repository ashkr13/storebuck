<?php

$id=$_GET["id"];

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
<link rel="stylesheet" href="css/right_sidebar.css" />
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.storebuck.in/"><span style="color:#099">STORE<span style="color:#FFFFFF">BUCK.in</a>        
          </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sellersignup.php">Sell with us</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
           <li>
              <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" size="50" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
    
    
    
    




<br />
<?php
$res=mysqli_query($con,"select * from product where id=$id");
while($row=mysqli_fetch_array($res))
{
?>

<div class="container">
  <div class="row">
    <div class="col-sm-5">
    
    <img src="./Admin/<?php echo $row["filebutton"]; ?>" alt="" class="img-responsive" />
    <div class="col-sm-4"><button type="submit" name="buynow" class="btn btn-lg btn-block btn-info">Buy Now</button></div>
    

   </div>

      <div class="col-sm-7">
           <div class="row">
             <div class="col-md-12">
             <h2><?php echo $row["product_name"]; ?></h2>
             </div>
             <p>Web ID: 1089772</p>

           </div>
            
    
<div class="row">
 <div class="col-md-3">
  <span class="sr-only">Four out of Five Stars</span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
  <span class="label label-success">61</span>
 </div>
 <div class="col-md-3">
  <span class="monospaced">Write a Review</span>
 </div>
</div><!-- end row -->

<div class="row">
 <div class="col-md-12 bottom-rule">
  <h2 class="product-price"><i class="fa fa-inr"></i> <?php echo $row["product_price"]; ?></h2>
 </div>
 
</div><!-- end row -->
<div>
       <span>				
		<label>Quantity:</label>
			<input type="text" value="3" />
					<button type="button" class="btn btn-default cart">
							<i class="fa fa-shopping-cart"></i>
						      Add to cart
					</button>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
       </span>
			<p><b>Availability:</b> In Stock</p>
			<p><b>Condition:</b> New</p>
			
</div>

<div class="row">
 <div class="col-md-4 text-center">
  <span class="monospaced">In Stock</span>
 </div>
 <div class="col-md-4 col-md-offset-1 text-center">
  <a class="monospaced" href="#">Add to Shopping List</a>
 </div>
</div><!-- end row -->
<div class="row">
 <div class="col-md-12 bottom-rule top-10"></div>
</div><!-- end row -->

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
 <li role="presentation" class="active">
  <a href="#description"
   aria-controls="description"
   role="tab"
   data-toggle="tab"
  >Description</a>
 </li>
 <li role="presentation">
  <a href="#features"
   aria-controls="features"
   role="tab"
   data-toggle="tab"
  >Features</a>
 </li>
 
 <li role="presentation">
  <a href="#reviews"
   aria-controls="reviews"
   role="tab"
   data-toggle="tab"
  >Reviews</a>
 </li>
</ul><!-- Tab panes -->
<div class="tab-content">
 <div role="tabpanel" class="tab-pane active" id="description">
  <p class="top-10">
  <?php echo $row["product_description"]; ?>
  </p>
 


 </div>
 <div role="tabpanel" class="tab-pane top-10" id="features">
  ...
 </div>
 
 <div role="tabpanel" class="tab-pane" id="reviews">
                                   <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
 </div>
</div>
             </div>
             </div>
  </div><!-- end of row -->
</div><!-- end of container -->


<?php	
}

?>


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
        <li><a href="http://www.storebuck.in/">Storebuck.in</a></li>
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