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
	<div class="check">	 
			 <h1 class="lang" key="Shop">My Shopping Bag</h1>
		<div class="col-md-9 cart-items">
		<?php
				require('valid/connect.php');
				$total=0;
				if (!empty($_COOKIE['user'])) {
					$id = $pdo->query("select id from user where name = '$_COOKIE[user]'")->fetch();
					$q = $pdo->prepare('select product.id, name, img_path, price,orders.count from product left join orders on product.id = orders.id_p where id_u = ?');
					if($q->rowCount($q->execute([$id['id']]) !== 0 )){
						foreach ($q as $row) {
							echo "<div class='col-md-4 bottom-cd simpleCart_shelfItem'>";
							echo "<div class='product-at marg'>";
							echo "<div class = 'pro-grid'>" . "<a href=single.php?id=" . $row['id'] . "></> " . "<span class='lang' key='" . $row['id'] . "'>" . $row['name'] . "</span><span>" . $row['price'] . "</span>" . "</a>" . "</div>";
							echo "<img class='img-responsive' src= " . $row['img_path'] . "></a>";
							echo "<form action='valid/del_item.php?id=$row[id]' method='post' name='del_item'>
                            <div class='pro-grid2'>
                            <button class='lang' name='del' key='Delete'>Delete Item</button></form></div>";
							echo "</div>";
							echo "<div class='CountV'><span class='lang' key='Count'>Count</span> $row[count] </div>";
							echo "</div>";
							$total += $row['price'] * $row['count'];
					}
					} else echo "<p class='lang' key='Bag'>Bag is empty</p>";
					//var_dump($_SESSION);
				} else echo "<p class='lang' key='Bag'>Bag is empty2</p>";
				//var_dump($id);

				?>

			</div>
			<div class="col-md-3 cart-total">
				<form action="buy.php" method="post">
				<?php if($total == 0): ?> 
                            <div class="pro-grid2">
                            <button disabled class="lang" key="Add">Add items in your bag</button>
                            </div>
                            <style>
                                .footer { 
                                    margin-top:131px;
                                }
                            </style>
                        <?php else: ?>
                            <div class="pro-grid2">
                            <button class="lang" key="Confirm">Confirm order</button>
                            </div>
                            <div class="clearfix"></div>
                        <?php endif;?>
                </form>
                <div class="price-details">
                    <span class="total1">
                    </span>
                    <div class="clearfix"></div>
                </div>
                <ul class="total_price">
                    <li class="last_price">
                        <h4 class="lang tot" key="Total" >TOTAL</h4>
                    </li>
                    <li class="last_price"><span>
                    <?php
                    if($total !== 0)
                    echo $total;
                    else echo '----';
                    $_SESSION['price'] = $total;
                    ?>
					</span></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="clearfix"></div>
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
		</div>
	</div>
</body>
</html>
			