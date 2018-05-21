<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();
	include("connection.php")
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Supreme Audio</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->

 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
</head>
<body>
<!--header-->
<div class="header">
			<div class="header-top">
				<div class="container">
					 
					<div class="top-right">
					<ul>
						<li><a href="cart.php">Cart</a></li>
						<?php if($_SESSION['user'] == ""){?>
							<li><a href="login.php">Login</a></li>
						<?php } else { ?>
							<li><a href="logout.php">Log-out</a></li>
						<?php } ?>
						<li><a href="registered.php"> Create Account </a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="index.php">Supreme Audio<span>Top-tier Audio</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Focal<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Headphone Type</h6>
														<li><a href="products.php">Infraural</a></li>
														<li><a href="products.php">Circumaural</a></li>
													</ul>
												</div>
												
												<div class="col-sm-3  multi-gd-img">
														<a href="products.php"><img src="images/woo.jpg" alt=" "/></a>
														Infraural
												</div> 
												<div class="col-sm-3  multi-gd-img">
														<a href="products.php"><img src="images/woo1.jpg" alt=" "/></a>
														Circumaural
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sennheiser<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Headphone Type</h6>
														<li><a href="products1.php">Infraural</a></li>
														<li><a href="products1.php">Circumaural</a></li>
													</ul>
												</div>
												
												<div class="col-sm-3  multi-gd-img">
														<a href="products1.php"><img src="images/woo.jpg" alt=" "/></a>
														Infraural
												</div> 
												<div class="col-sm-3  multi-gd-img">
														<a href="products1.php"><img src="images/woo1.jpg" alt=" "/></a>
														Circumaural
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									
								</ul>
							</div>
							</nav>
						</div>
						
						<div class="header-right2">
							<div class="cart box_1">
								<a href="checkout.php">
									<h3> <div class="total">
										
										<img src="images/bag.png" alt="" />
									</h3>
								</a>
								
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
					<!--login-->
                    <div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Add Product</h3>
					<form action="insertProduct.php" method="post">
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Produt Name" name="Produt_Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Produt Name';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Description" name="Product_Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Description';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Price" name="Product_Price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Price';}" required="">
							<div class="clearfix"></div>
						</div>
                        <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Quantity" name="Product_Quantity" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Quantity';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Brand" name="Product_Brand" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Brand';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Category" name="Product_Category" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product category';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Image" name="Product_Image" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Image';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>

                <br><br><br><br>
                <!--MOD-->
				<div class="form-w3agile form1">
					<h3>Modify Product</h3>
					<form action="modifyProduct.php" method="post">
						
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="ID of the product to modify" name="Product_Id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'ID of the product to modify';}" required="">
							<div class="clearfix"></div>
						</div>
					
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="New Price" name="Product_Price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Price';}" required="">
							<div class="clearfix"></div>
						</div>
                        <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="New Quantity" name="Product_Quantity" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Quantity';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<input type="submit" value="Submit">
					</form>
				</div>
                <!--Historial-->
                <?php
                        
                        //print_r($idUsuario);
                        $result = mysqli_query($conn,"SELECT * FROM mydb.orders;");
						while($row = mysqli_fetch_array($result)){?>
                            <div class="cart-header">
                                
                                <div class="cart-sec simpleCart_shelfItem">
                                        <?php
                                            $temp=$row['producto'];
                                            $resultimg = mysqli_query($conn,"SELECT * FROM mydb.products WHERE idProducts=$temp ;");
                                            $rowimg=mysqli_fetch_array($resultimg)
                                        ?>
                                        <div class="cart-item cyc">
                                        <img  src="<?php echo $rowimg['imagen'] ?>" class="img-responsive" alt="">
                                        </div>
                                    <div class="cart-item-info">
                                        <?php
                                            $aux=$rowimg['marca'];
                                            $resultBrand = mysqli_query($conn,"SELECT * FROM mydb.Brands WHERE idBrands=$aux ;");
                                            $rowBrand=mysqli_fetch_array($resultBrand);
                                        ?>
                                        <h3><a href="#"> <?php echo $rowimg['nombre'] ?></a><span>Brand: <?php echo $rowBrand['nombre'] ?> </span>
                                        <span>User who purchase it: <?php echo $row['usuario'] ?> </span></h3>
                                        <ul class="qty">
                                            <h2><span class="label label-info">Left in Storage: <?php echo $rowimg['cantidad'] ?></span></a></h2>
                                        </ul>
                                            <div class="delivery">
                                            <p>Price: $<?php echo $rowimg['precio'] ?> usd</p>
                                            <?php $_SESSION['total']=$_SESSION['total']+ $rowimg['precio'];?>
                                            <div class="clearfix"></div>
                                        </div>	
                                    </div>
                                    <div class="clearfix"></div>
                                                            
                                </div>
                            </div>
                            
                     <?php	} ?>
			</div>
		</div>

							
	<!-- checkout -->	
		</div>
					<!---footer--->
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About </h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>My Account</h4>
									<ul>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="registered.html"> Create Account </a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Information</h4>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="products.html">Products</a></li>
										<li><a href="codes.html">Short Codes</a></li>
										<li><a href="mail.html">Mail Us</a></li>
										<li><a href="products1.html">products1</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid foot">
									<h4>Contacts</h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd, Westby, USA</a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>
										
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2016 New Shop . All rights reserved.</p>
							</div>
							<div class="copy-right">
								<img src="images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->
				
</body>
</html>