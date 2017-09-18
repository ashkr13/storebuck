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
<title>Indian Online shopping Store</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/style12.css" />
<link rel="stylesheet" href="css/style17.css" />
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
          </button><a class="navbar-brand" href="index.php"><span style="color:#099">STORE<span style="color:#FFFFFF">BUCK.in</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sellersignup.php">Sell with us</a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
            <li>
			<?php
			if(!isset($_SESSION['']))

			{

           echo "<a href='Login.php'><span class='glyphicon glyphicon-log-in'></span> Log In</a>";

			} else

			{
			echo "<a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Log out</a>"	;
			}
			?>
            </li>
           <li>
              <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
            <form method="get" action="result.php" class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" name="user_query" class="form-control" size="50" placeholder="Search for products..." />
              </div>
              <button type="submit" name="search" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->


    <style>
  .carousel-inner > .item > img,

  .carousel-inner > .item > a > img {

        height: auto;

        width: 100%;

        line-height: 1;
  }
  </style>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>

    </ol>


    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a href="#"><img src="img/ban1.jpg" width="200" height="200" >
        </a>
      </div>

      <div class="item">
       <a href="#"><img src="img/ban2.jpg" width="200" height="200" ></a>
      </div>

      <div class="item">
       <a href="#"><img src="img/ban3.jpg" width="200" height="200" ></a>
      </div>

      <div class="item">
        <a href="#"><img src="img/ban4.jpg" width="200" height="200"></a>
      </div>

      <div class="item">
        <a href="#"><img src="img/ban5.jpg" width="200" height="200"></a>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- cards-->

<section class="work-info">
<div class="card">
    <div class="container">
        <p class="text-center sb-heading">POPULAR CATEGORIES</h1>
          <div class="row">
           <div class=" col-md-6 col-sm-6 col-sm-12">
                <div class="work-item">
                    <a href="#">
                    <img src="img/men.jpg" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-sm-12 ">
                <div class="work-item">
                    <a href="#">
                    <img src="img/clothing-store1.jpg" class="img-responsive">
                    </a>
                </div>
            </div>

            </div><!--end of row-->
            <div class="row">
            <div class="col-md-6 col-sm-6 col-sm-12 ">
                <div class="work-item">
                    <a href="#">
                    <img src="img/beauty.jpg" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-sm-12">
                <div class="work-item">
                    <a href="#">
                    <img src="img/shoes.jpg" class="img-responsive">
                    </a>
                </div>
            </div>
           </div><!--end of row-->

            <div class="row">
              <div class="col-md-12 text-center"><a class="sb-link" href="categories.php">see all categories >></a></div>
           </div>
         </div> 
    </div><!--end of container-->
</section>

 <!--end of work section-->


<!--Item slider text-->
<section class="new-collection">
<div class="card">
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-12 col-sm-12 col-xs-12" >
      <p class="text-center sb-sub-heading">NEW COLLECTION</h3>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/fastrack-9463al07-500x500.jpg" class="img-responsive center-block"></a>
              <h5 class="text-center">FASTRACK WATCH</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/sparx shoes 2.jpg" class="img-responsive center-block"></a>
              <h5 class="text-center">SPARX SHOES</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/12-Baby-lips-Eyeconic-kajal.jpg" class="img-responsive center-block"></a>
              <h5 class="text-center">BABY LIPS EYECONIC KAJAL</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/41YK-EbPSbL._SY300_QL70_.jpg" class="img-responsive center-block"></a>
              <h5 class="text-center">QUICK HEAL</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/71sSGxH3uEL._SL1500_.jpg" class="img-responsive center-block"></a>
              <h5 class="text-center">DELL LAPTOP</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/ms-total_security_productpage_1.png.pagespeed.ce.nf4Ur0u26_.png" class="img-responsive center-block"></a>
              <h5 class="text-center">QUICK HEAL TOTAL SECURITY</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>

                    <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/ms-total_security_productpage_1.png.pagespeed.ce.nf4Ur0u26_.png" class="img-responsive center-block"></a>
              <h5 class="text-center">QUICK HEAL TOTAL SECURITY</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>

                    <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="img/ms-total_security_productpage_1.png.pagespeed.ce.nf4Ur0u26_.png" class="img-responsive center-block"></a>
              <h5 class="text-center">QUICK HEAL TOTAL SECURITY</h5>
              <h6 class="text-center"><i class="fa fa-inr"></i> 400.00</h6>
            </div>
          </div>
      </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Item slider end-->
</section>

<section>
<div class="card">
<div class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 class="sb-heading">Store For What you Want</h1>
                    <a class="btn btn-success btn-md" href="#">Explore Now »</a>
                </div>
            </div>
        </div>
</div>



<div class="container">
  <p class="text-center sb-sub-heading">Budget Store </p>

  <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="img/background (2).jpg" alt="...">
    </a>
  </div>
 <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="img/background299.jpg" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="img/background499.jpg" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="img/background999 (1).jpg" alt="...">
    </a>
  </div>
</div>
</div><!--end of container-->
</div>

</section>

 <div class="jumbotron text-center">
  <h2>Newsletter</h2>
  <p>Enter your Email and keep up with the latest offers from Storebuck.</p>
  <form action="" class="form-inline">
    <input type="email" name="email" class="form-control" size="50" placeholder="Email" required>
    <button type="button" class="btn btn-primary">Subscribe</button>
  </form>
</div>


  <!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>FREE DELIVERY</h4>
						<p>ON YOUR ORDER COST RS.500/- AND ABOVE </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
					  <i class="fa fa-refresh" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>30 DAYS REPLACEMENT</h4>
						<p>EASY RETURN* </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p> PROVIDE QUALITY GOODS AND GENUINE PRODUCTS</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top -->


<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter">StoreBuck</div>
        <p>It all started with a great idea and a little hard work. today we're proud to provide quality products direct to you doorstep through an experiance .Call and Email us today to let us know what you think. we'd love to hear from you.</p>
        <p><i class="fa fa-map-pin"></i> Hazratgunj Lucknow, INDIA</p>
        <p><i class="fa fa-phone"></i> Phone (India) :+91-98-97-96-5332</p>
        <p><i class="fa fa-envelope"></i> E-mail : Yadav.vipin642@gmail.com</p>

      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">My Account</h6>
        <ul class="footer-ul">
          <li><a href="#"> Sign up</a></li>
          <li><a href="#"> Shopping Cart</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="timeline.php"> Timeline</a></li>
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
        <li><a href="about.php">About us</a></li>
        <li><a href="career.php">Career</a></li>
        <li><a href="#">Faq's</a></li>
        <li><a href="contac2us.php">Contact us</a></li>
        <li><a href="sitemap.php">Site Map</a></li>
      </ul>
    </div>
  </div>
</div>

<!-- The scroll to top feature -->

<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
</div>

<script type="text/javascript" src="js/jquery.js.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
