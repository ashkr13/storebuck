<?php
session_start();
if($_SESSION["admin"]=="")
{
?>
<script type="text/javascript">
window.location="admin.php";
</script>	


<?php
}

include ('dbcon.php');

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Panel</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="Dash.php" class="logo">Store <span class="lite">Buck</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="#">
                            </span>
                            <span class="username">Vipin Yadav</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                     
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                       
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="Dash.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="insert_products.php">
                          <span>Insert Products</span>
                      </a>
                  </li>      
                  <li>
                      <a class="" href="view_orders.php">
                         <span>View Orders</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="view_products.php">
                          <span>View All Products</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="insert_new_categories.php">
                          <span>Insert New Categories</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="view_all_categories.php">
                          <span>View All Categories</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="insert_new_brands.php">
                          <span>Insert New Brands</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="view_all_brands.php">
                          <span>View All Brands</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="view_customers.php">
                          <span>View Customers</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="vendors.php">
                          <span>Vendors</span>
                      </a>
                  </li>
                  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Insert Product</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="Dash.php">Home</a></li>
						<li><i class="fa fa-square-o"></i>Insert Products</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              
              
                    
                      <form method="post" action="insert_products.php" enctype="multipart/form-data" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h1 align="center">PRODUCTS</h1>

<br />

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required type="text">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_categorie" class="form-control">
     <option>Shoes</option>
     <option>Books</option>
     <option>Mobiles</option>
     <option>Clothes</option>
     <option>Mobile Covers</option>
     <option>Accessories</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT QUANTITY</label>  
  <div class="col-md-4">
  <input id="product_quantity" name="product_quantity" placeholder="PRODUCT QUANTITY" class="form-control input-md" required type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input id="product_price" name="product_price" placeholder="PRODUCT PRICE" class="form-control input-md" required type="text">
    
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">PERCENTAGE DISCOUNT</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required type="text">
    
  </div>
</div>


 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>


<br />
<!-- Button -->

  <div align="center" class="col-md-12">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
  

</fieldset>
</form>    
  
  
<?php
 if(isset($_POST["singlebutton"])) 
 {
	 $v1=rand(1111,9999);
	 $v2=rand(1111,9999);
	 
	 $v3=$v1.$v2;
	 
	 $v3=md5($v3);
	$fnm=$_FILES["filebutton"]["name"];
	$dst="./products_img/".$v3.$fnm;
	$dst1="products_img/".$v3.$fnm;
	move_uploaded_file($_FILES["filebutton"]["tmp_name"],$dst);
	
	
mysqli_query($con,"insert into product values('','$_POST[product_name]','$_POST[product_categorie]',$_POST[product_quantity],$_POST[product_price],'$_POST[product_description]','$_POST[percentage_discount]','$dst1')");
	
	
	
	 
 }
  
  
  
?>                     
              
              
              
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  
  </section>
  <!-- container section end -->
    <!-- javascripts -->
     <script src="js/jquery1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
