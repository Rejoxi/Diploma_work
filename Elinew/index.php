<!DOCTYPE html>
<html>
<head>
<title>Elinew</title>
<link rel="icon" href="images/logo5.png" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/slider.js" defer></script>
<script src="js/translate.js" defer></script>
<script src="js/header-menu.js" defer></script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="container">
			
			<div class="Change_lang">
				<ul>
					<li><a id="ukr" class="translate">Ukr</a></li>
					<li><a id="eng" class="translate">Eng</a></li>
				</ul>
			</div>
			<div class="header-left">		
					<ul>	
						<?php if(empty($_COOKIE['user'])): ?> 
							<li><a href="login.php" class="lang" key="Login">Login</a></li>
							<li><a href="register.php" class="lang" key="Register">Register</a></li>
						<?php else: ?>
							<li><a href="index.php"><?=$_COOKIE['user']?></a></li>
							<li><a href="logout.php" class="lang" key="Logout"> Logout </a></li>
						<?php endif;?>
					</ul>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total lang" key="Items">
							<span id="simpleCart_quantity"></span> items</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/label.png" alt=""></a>	
				</div>
				<div class=" h_menu4">
					<ul class="memenuskyblue">
					<li class="active grid menu__item"><a class="color8 lang" href="index.php" key="Home">Home</a></li>	
				      <li><a class="menu__item lang" href="#" key="Men">Men</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
									<li><a class="lang " href="products.php?catigory=tshirt&gender=1" key="Tshirts">T-shirts</a></li>
										<li><a class="lang" href="products.php?catigory=shirt&gender=1" key="Shirts">Shirts</a></li>
										<li><a class="lang" href="products.php?catigory=turtleneck&gender=1" key="Turtleneck">Turtleneck sweater</a></li>
										<li><a class="lang" href="products.php?catigory=jacket&gender=1" key="Jackets">Jackets</a></li>
										<li><a class="lang" href="products.php?catigory=hoodie&gender=1" key="Hoodies">Hoodies</a></li>
										<li><a class="lang" href="products.php?catigory=trouser&gender=1" key="Trousers">Trousers</a></li>
										<li><a class="lang" href="products.php?catigory=bag&gender=1" key="Bags">Bags</a></li>
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="menu__item lang" href="#" key="Women">Women</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
									<li><a class="lang" href="products.php?catigory=dress&gender=0" key="Dresses">Dresses</a></li>
										<li><a class="lang" href="products.php?catigory=jacket&gender=0" key="Jackets">Jackets</a></li>
										<li><a class="lang" href="products.php?catigory=blouse&gender=0" key="Blouses">Blouses</a></li>
										<li><a class="lang" href="products.php?catigory=shirt&gender=0" key="Shirts">Shirts</a></li>
										<li><a class="lang" href="products.php?catigory=bag&gender=0" key="Handbags">Handbags</a></li>
										<li><a class="lang" href="products.php?catigory=skirt&gender=0" key="Skirts">Skirts</a></li>
										<li><a class="lang" href="products.php?catigory=trouser&gender=0" key="Trousers">Trousers</a></li>
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
			    </li>				
				<li><a class="menu__item lang" href="contact.php" key="Contact">Contact</a></li>
			  </ul>
			</div>

                <div class="header__hamburger">
                    <div class="header__hamburger_line header__hamburger_line_1"></div>
                    <div class="header__hamburger_line header__hamburger_line_2"></div>
                    <div class="header__hamburger_line header__hamburger_line_3"></div>
                </div>

				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<div class="banner">
		<div class="container">
			<div class="sim-slider">
			<ul class=" rslides sim-slider-list" >
			    <li class="sim-slider-element banner-text" alt="0">
							<h3 class="lang" key="Welcome">Welcome to our online store! Our company welcomes everyone who came to the site!</h3>
				</li>
				<li class="sim-slider-element banner-text" alt="1" >
							<h3 class="lang" key="Online">Our online store offers the lowest prices, don't even try to find cheaper!</h3>
				</li>
				<li class="sim-slider-element banner-text" alt="2">
							<h3 class="lang" key="Wait">We are waiting for you to shop every day, we are always at your service!</h3>
				</li>
			</ul>
			<div class="sim-slider-arrow-left"></div>
  			<div class="sim-slider-arrow-right"></div>
			<div class="sim-slider-dots"></div>
		</div>
	</div>
</div>

<div class="content">
	<div class="container">
	<div class="content-top">
		<h1 class="lang" key="Released">NEW RELEASED</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="products.php?catigory=tshirt&gender=1" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi0.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left b-delay03 ">
										<span class="lang" key="Tshirts">T-Shirts</span>	
									</h3>
								</div>
				</a>
			</div>
			<div class="col-md-4 grid-top">
				<a href="products.php?catigory=turtleneck&gender=1" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pia.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left b-delay03 ">
										<span class="lang" key="Turtleneck">Turtleneck sweaters</span>	
									</h3>
								</div>
				</a>
			</div>
			<div class="col-md-4 grid-top">
				<a href="products.php?catigory=jacket&gender=1" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pio.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left b-delay03 ">
										<span class="lang" key="Jackets">Jackets</span>	
									</h3>
								</div>
				</a>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="products.php?catigory=dress&gender=0" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/piw.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span class="lang" key="Dresses">Dresses</span>	
									</h3>
								</div>
				</a>
			</div>
			<div class="col-md-4 grid-top">
				<a href="products.php?catigory=blouse&gender=0" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pir.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span class="lang" key="Blouses">Blouses</span>	
									</h3>
								</div>
				</a>
			</div>
			<div class="col-md-4 grid-top">
				<a href="products.php?catigory=skirt&gender=0" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/piu.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span class="lang" key="Skirts">Skirts</span>	
									</h3>
								</div>
				</a>
			</div>
					<div class="clearfix"> </div>
		</div>
	</div>

	
	<div class="content-top-bottom">
		<h2 class="lang" key="Featured">Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="products.php?catigory=trouser&gender=1" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span class="lang" key="Trousers">Trousers</span>	
									</h3>
								</div>
			</a>
			
			
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="products.php?catigory=bag&gender=1" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t2.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span class="lang" key="Bags">Bags</span>	
									</h3>
								</div>
				</a>
				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="products.php?catigory=shirt&gender=1" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t3.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span class="lang" key="Shirts">Shirts</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="col-md-6 men2">
					<a href="products.php?catigory=hoodie&gender=1" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t5.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span class="lang" key="Hoodies">Hoodies</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>

</div>

<div class="footer">
		<div class="container">
			<div class="footer-top-at">
					<div class="col-md-4 amet-sed">
						<h4 class="lang" key="More">MORE INFO</h4>
						<ul class="nav-bottom">
							<li><a href="contact.php" class="lang" key="Location">Location</a></li>
							<li><a href="#" class="lang" key="Shipping">Shipping</a></li>
							<li><a href="#" class="lang" key="Membership">Membership</a></li>	
						</ul>	
					</div>
				<div class="col-md-4 amet-sed ">
				<h4 class="lang" key="ContactUS">CONTACT US</h4>
					<p class="lang" key="Contrary">Mon-Fri from 8:00 to 16:00</p>
					<p class="lang" key="Standart">priemnaya.u.danila.i.romi@gmail.com</p>
					<p class="lang" key="Office">office:  +38 099 165 35 88</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4 class="lang" key="Newsletter">Newsletter</h4>
					<p class="lang" key="SingUp">Sign Up to get all news update and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<button class="SingUpl lang" key="SingUpl">Sing Up</button>
					</form>
				</div>
		</div>
		</div>
</body>
</html>
