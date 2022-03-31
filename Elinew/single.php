<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Elinew</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo5.png" type="image/x-icon">
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/translate.js" defer></script>	
<script src="js/header-menu.js" defer></script>
</head>
<body>

<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="Change_lang">
				<ul>
					<li><a id="ukr" class="translate lang">Ukr</a></li>
					<li><a id="eng" class="translate lang">Eng</a></li>
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
<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate lang" key="Special">Special offers</h3>
					</div>
					<ul class="menu">
		<li class="item1"><a href="#" key="Men" class="lang">Men </a>
			<ul class="cute">
				<li class="subitem1"><a href="single.php" class="lang" key="Backpacks">Backpacks | Gucci</a></li>
				<li class="subitem2"><a href="single.php" class="lang" key="Wristwatch">Wristwatch | MAD Paris</a></li>
				<li class="subitem3"><a href="single.php" class="lang" key="Belt">Leather Belt | Giorgio Armani</a></li>
				<li class="subitem4"><a href="single.php" class="lang" key="Handmade">Silk tie | Stefano Ricci</a></li>
			</ul>
		</li>
		<li class="item2"><a href="#" key="Women" class="lang">Women </a>
			<ul class="cute">
				<li class="subitem1"><a href="single.php" class="lang" key="Lace">Lace blouse | Dolce & Gabbana</a></li>
				<li class="subitem2"><a href="single.php" class="lang" key="Skirt_p">Skirt | Valentino</a></li>
				<li class="subitem3"><a href="single.php" class="lang" key="Dress_p">Dress | Dolce&Gabbana</a></li>
				<li class="subitem4"><a href="single.php" class="lang" key="Chronograph">Chronograph watch | Korloff</a></li>
			</ul>
		</li>
	</ul>
					</div>
	
<div class=" per1">
			</div>
				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
					<?php
						$id = $_GET['id'];
						require('valid/connect.php');
						$info = $pdo -> prepare('select id,name,price, img_path, material from product where id = ? limit 1');
						$info->execute(array($id));
						foreach($info as $ar){
							echo "<img src= ". $ar['img_path'] . '>';
						}
					?>
				</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4 class='lang' key=<?=$ar['id']?>><?=$ar['name']?></h4>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price"><?=$ar['price']?></h5>
							<p class='lang' key='<?=$ar['name']?>'><?=$ar['material']?></p>
							<div class="available">
								<ul>
								<li class="size-in">Size<select name='size'>
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>XL</option>
									<option>2XL</option>
								</select></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
						<form action='valid/add_item.php?id=<?=$ar['id']?>' method="post" name='prod' class='formin'>
							<?php if(empty($_COOKIE['user'])): ?> 
								<div class="pro-grid3 pro-grid-width">
								<button disabled="disabled" class="lang" key="Register_Login">Register\login to add to cart</button>
								</div>
							<?php else: ?>
								<div class="pro-grid3">
								<button class="lang" key="Add">Add to bag</button>
								<input type="number" class='number1' name="count" value="1" step='1' min='1' max='5'>
								</div>
							<?php endif;?>
							</div>
						</form>
						
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0">Description </a></li>
					<li><a data-content="cinema" href="#0" >Addtional Informatioan</a></li>
					<li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>
					
				</ul> 
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="facts">
									  <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
										<ul>
											<li>Research</li>
											<li>Design and Development</li>
											<li>Porting and Optimization</li>
											<li>System integration</li>
											<li>Verification, Validation and Testing</li>
											<li>Maintenance and Support</li>
										</ul>         
							        </div>

</li>
<li data-content="cinema" >
		<div class="facts1">
					
						<div class="color"><p>Color</p>
							<span >Blue, Black, Red</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Size</p>
							<span >S, M, L, XL</span>
							<div class="clearfix"></div>
						</div>
					        
			 </div>

</li>
<li data-content="television" class="selected">
	<div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h6><a href="#">Hendri</a> - September 3, 2014</h6>
					<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
									<p>Wow nice!</p>
				</div>
				<div class="clearfix"> </div>
				<a class="add-re" href="#">ADD REVIEW</a>
			</div>

</li>
<div class="clearfix"></div>
	</ul> 
</div> 
		<div class="clearfix"> </div>
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
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>
			