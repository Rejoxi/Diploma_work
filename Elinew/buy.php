<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Elinew</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="icon" href="images/logo5.png" type="image/x-icon">
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/translate.js" defer></script>
<script src="js/functions.js" defer></script>
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
<div class="container">
<div class="row1">
  <div class="col-75">
    <div class="container1">
      <form action="Succes.php">
        <div class="row1">
          <div class="col-25">
            <h3 class="lang" key="Payment">Payment</h3>
            <label for="fname" class="lang" key="Accepted">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa"><img src="images/visa.png"></i>
              <i class="fa fa-cc-alfabank"><img src="images/alfabank.png"></i>
              <i class="fa fa-cc-mastercard"><img src="images/pumb.png"></i>
              <i class="fa fa-cc-pumb"><img src="images/mastercard.png"></i>
            </div>
            <label for="cname" class="lang" key="Namec">Name on Card</label>
            <input required type="text" id="cname" name="cardname" placeholder="Кожедубов Иван" maxlength="40">
            <label for="ccnum" class="lang" key="Credit">Credit card number</label>
            <input class="test_inpit" required type="text" id="ccnum" name="cardnumber" maxlength="19" placeholder="1111 2222 3333 4444">
            <label for="expmonth" class="lang" key="Exp">Exp Month</label>
            <input required type="text" id="expmonth" name="expmonth" maxlength="12" placeholder="Сентябрь">
			<div class="row1">
              <div class="col-50">
                <label for="expyear" class="lang" key="Expy">Exp Year</label>
                <input required class="ss2" type="text" id="expyear" name="expyear" maxlength="4" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input required class="ss2" type="text" id="cvv" name="cvv" maxlength="3" placeholder="352">
              </div>
			</div>
			<label for="email" class="lang" key="Email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="roma@example.com">
            <label for="adr" class="lang" key="Address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Харьков, ул. Полевая, 67">
            <label for="city" class="lang" key="City"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Харьков">
			<div class="row1">
              <div class="col-50">
                <label for="state" class="lang" key="State">State</label>
                <input type="text" id="state" name="state" placeholder="Харьковская">
              </div>
              <div class="col-50">
                <label for="zip" class="lang" key="Ind">Zip</label>
                <input type="text" class="ss2" maxlength="10" id="zip" name="zip" placeholder="61168">
              </div>
              <p class="Total lang" key="Total"><p class="Total"><?php
					if(isset($_SESSION['price']))
					echo $_SESSION['price'];
					else echo '----';
					?></p>
            </div>
          </div>

        </div>
		<form action="../Succes.php" method="post">
        <button class="btn lang" key="Pay">Pay</button>
		</form>
      </form>
    </div>
  </div>
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
							<li><a href="contact.php" class="lang" key="Location">Location</a></li>
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
		</div>
	</div>
</body>
</html>
			