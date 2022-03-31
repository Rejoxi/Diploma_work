<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Elinew</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo5.png" type="image/x-icon">
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/translate.js" defer></script>
<script src="js/header-menu.js" defer></script>
</head>
<body>
<!--header-->
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
<div class="contact">
			
			<div class="container">
				<h1 class="lang" key="Contact">Contact</h1>
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form action='valid/review.php' method='post'>	
						<input type="text" maxlength="40" value="name" name='name' onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					
						<input type="email" value="email" maxlength="40" name='email' onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="subject" maxlength="20" name='subject' onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						
						<textarea cols="77" rows="6" name='review' maxlength="240" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="send">
							<button type='submit' class="sendl lang" key="Send">Send</button>
						</div>
					</form>
					<?php
						if(isset($_SESSION['message'])){
							echo "<p class='Erorsl'>";
							echo $_SESSION['message'];
							echo "</p>";
						}
						unset($_SESSION['message']);
					?>
				</div>
				<div class="col-md-4 contact-in">

						<div class="address-more">
						<h4 class="lang" key="Address">Address</h4>
							<p>Elinew,</p>
							<p>Харківська набережна, 4/5, Харків, Харківська область </p>
						</div>
						<div class="address-more">
						<h4 class="lang" key="Address">Address1</h4>
							<p>Tel:+38 099 165 35 88</p>
							<p>Email:<a href="mailto:contact@example.com"> priemnaya.u.danila.i.romi@gmail.com</a></p>
						</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126.72991525218822!2d36.23985170511361!3d49.99056553310534!2m3!1f99.45!2f45.000000000002146!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x4127a0f278b94b77%3A0x48a93fff9cd4fd00!2z0KLQvtGH0LrQsCDQv9GA0LjRgdGD0YLRgdGC0LLQuNGPINCf0KPQnNCRIOKAlCDQkdCw0L3QutC-0LzQsNGCINGB0LXRgtC4IOKAntCg0LDQtNC40YPRgeKAnA!5e1!3m2!1sru!2sua!4v1619527499697!5m2!1sru!2sua" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
		
	</div>
<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
				<div class="col-md-4 amet-sed">
				<h4 class="lang" key="More">MORE INFO</h4>
						<ul class="nav-bottom">
							<li><a href="#" class="lang" key="Location">Location</a></li>
							<li><a href="#" class="lang" key="Shipping">Shipping</a></li>
							<li><a href="#" class="lang" key="Membership">Membership</a></li>	
						</ul>	
					</div>
				<div class="col-md-4 amet-sed ">
				<h4 class="lang" key="ContactUS">CONTACT US</h4>
					<p class="lang" key="Contrary">Contrary to popular belief</p>
					<p class="lang" key="Standart">The standard chunk</p>
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
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
</body>
</html>