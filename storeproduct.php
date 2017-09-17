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
<link rel="stylesheet" href="css/storeproduct.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
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
          <a class="navbar-brand" href="index.php"><span style="color:#099">STORE<span style="color:#FFFFFF">BUCK.in</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sellersignup.html">Sell with us</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
            <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                       <li>
              <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" size="50" class="form-control" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
    
    <br />
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										
										<?php
										$get_cats = "select * from category";
										
										$run_cats = mysqli_query($con, $get_cats);
										while ($row_cats=mysqli_fetch_array($run_cats)){
											
											$cat_id = $row_cats['cat_id'];
											$cat_title = $row_cats['cat_title'];
											
											
										echo "<a data-toggle='collapse' data-parent='#accordian' href='#sportswear'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											Shoes
										</a>";
										
										
										}
										
										
                                        ?>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Nike </a></li>
											<li><a href="">Sparx </a></li>
											<li><a href="">Adidas </a></li>
											<li><a href="">Puma</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Shirt</a></li>
											<li><a href="">Jeans</a></li>
											<li><a href="">T-Shirts</a></li>
											<li><a href="">Pant</a></li>
											<li><a href="">Armani</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Top</a></li>
											<li><a href="">Jeans</a></li>
											<li><a href="">Skirt</a></li>
											<li><a href="">Saree</a></li>
											<li><a href="">Plazo</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> Acne</a></li>
									<li><a href=""> Grüne Erde</a></li>
									<li><a href=""> Albiro</a></li>
									<li><a href=""> Ronhill</a></li>
									<li><a href=""> Oddmolly</a></li>
									<li><a href=""> Boudestijn</a></li>
									<li><a href=""> Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
					</div>
				</div>
        
        <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        
                  <?php
                  
				  $res=mysqli_query($con,"select * from product");
				  while($row=mysqli_fetch_array($res))
				  {
					?>
                    
                    <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
							<a href="singleproduct.php?id=<?php echo $row["id"];?>"><img src="./Admin/<?php echo $row["filebutton"]; ?>" alt="" width="170" height="240" /></a>
										<h2><i class="fa fa-inr"></i> <?php echo $row["product_price"]; ?></h2>
										<p><?php echo $row["product_name"]; ?></p>
							<a href="singleproduct.php?id=<?php echo $row["id"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
                    
                    
                    
                    <?php  
				  }
				  
				  ?> 
                        
                        
						
						
					</div>	
						<center><ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul></center>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

      			



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
<script type="text/javascript" src="js/main.js"></script>



<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
</div>
</body>
</html>