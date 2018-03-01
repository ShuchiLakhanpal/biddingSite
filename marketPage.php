<?php
session_start();
if($_SESSION["signin"] == "")
{
 ?> 
  <script type="text/javascript">
			window.location="register.php";
	</script>
<?php
}
?>
<?php


	include("db-connect.php");
	// $con = mysqli_connect('localhost','root','') or die(mysqli_error());
	// mysqli_select_db( $con, 'bid_sell_books') or die(mysqli_error());

?>
<!DOCTYPE Html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
	<title>Checkout Project</title>
	<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mainStyleSheet.css">
	<link rel="stylesheet" href="css/landingPage.css">
	<link rel="stylesheet" href="css/marketPage.css">
	<link rel="stylesheet" href="css/mobile.css">
	<link rel="stylesheet" href="css/animate.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/marketPage.js">
	</script>
	<!--<script type="text/javascript" src="js/register.js"> </script>
	<script type="text/javascript" src="js/landingPage.js"></script>-->
	<script src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/responsiveNav.js"> </script>
	<script type="text/javascript" src="js/market.js"></script>
</head>
<body>
  <section id="wrapper">
		<!--navigation-->
	<nav id="myNavbar" class="navbar navbar-inverse  nav-pills nav-stacked  " role="navigation">
	<section class="container-fluid">
		<section class=" row ">
			<section class=" navbar-header ">
				<img src="images/bluee.png" class="logo justifiedLogo">
			</section>
			<!--navbar-header-->
			<section class="navbar-collapse collapase  ">
				<!--<section class="navBarlogo">-->
				<a href="javascript:void(0)" class="closeNav backgroundOpenClose">&times;</a>
				<div id="mobileView">
					<ul class="nav navbar-nav justified alignList desktop">
						<li><a href="landingPage.html ">Home</a></li>
						<li class="current"><a href="marketPage.php">Market</a></li>
						<li><a href="account.html">Account</a></li>
						<li><a href="landingPage.html">Contact</a></li>
						<li class="arrowToggle helpMenu"><a href="help.html">Help<span class="caret caretDown"></span><span class="caretHelp">
								<i class="fa fa-chevron-circle-up " aria-hidden="true"></i></span></a>
								<!--<div>-->
								<ul class="helpMenu drop-menu ">
										<li id="faq" class="help"><a href="help.html ">FAQ</a></li>
										<li class="help" id="helpTwo"><a href="help.html ">How to Bid and Sell</a></li>
								</ul>
								<!--</div>-->
						</li>
						<?php
									if($_SESSION["signin"] == "true") {
						?>
						<li class="signUpMenu "><a href="signout.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<?php
							}
					
						?>
					</ul>
				</div>
				<div class="form">
					<form class="form-search ngen-search-form navbar-form navbar-left" action="" method="get">
						<section class="input-group justifiedSearch searchMobile">
								<input type="text" name="q" id="search-input" class="form-search-input buttonSearch" placeholder="Search by title, ISBN" dir="ltr">
								<span id="search-trigger" class="form-search-submit">&#x1f50e;</span>
						</section>
					</form>
				</div>
			</section>
		</section>
		<!--End row-->
	</section>
	<!--End container-->
</nav>
		<!--end of navigation section>-->
		<div id="navIcon">
				<span style="font-size:30px;cursor:pointer" class="openNav backgroundOpenClose">&#9776;</span>
		</div>
		<!--end of navigation section>-->
		<!--carousel-->
		<section class="wrapCarousel">
				<section class="wrapCarouselIn">
						<section class="outerCarousel  ">
								<a href="#" class="prev"><img src="images/redarrowP.png" alt="blue"></a>
								<section class="innerCarousel">
										<img src="images/booksale2.png" class="imageShown" alt="image1">
										<img src="images/usedsale.jpg" class="imageHidden" alt="image1">
										<img src="images/unique.jpg" class="imageHidden" alt="image1">
										<img src="images/usedred.jpg" class="imageHidden" alt="image1">
										<img src="images/booksalered.jpg" class="imageHidden" alt="image1">

								</section>
								<!--end carousel inner-->
								<a href="#" class="next"><img src="images/redarrowN.png" alt="blue"></a>

								<!--<button type="submit" class="btn btn-primary button">Bid Here</button>-->
								<form id="bidForm" action="market.html" method="get">
										<button type="submit" class="btn btn-primary button" formaction="market.html">Bid Here</button>
								</form>

						</section>
						<!--outer carousel-->

						<section class="outerCarouselTwo">
								<a href="#" class="prev1"><img src="images/redarrowP.png" alt="blue"></a>
								<section class="innerCarouselTwo">
										<img src="images/bookssell.jpg" class="shownImg" alt="image1">
										<img src="images/sellimage.jpg" class="hiddenImg" alt="image1">
										<img src="images/sellonline.png" class="hiddenImg" alt="image1">
										<img src="images/piggytext.png" class="hiddenImg" alt="image1">
										<img src="images/green.jpg" class="hiddenImg" alt="image1">

								</section>
								<!--end carousel inner-->
								<a href="#" class="next1"><img src="images/redarrowN.png" alt="blue"></a>
								<form id="sellBooksForm" action="sell.php" method="get">
										<button type="submit" class="btn btn-primary buttonSell" formaction="sell.php">Sell Books Here</button>
								</form>
						</section>
						<!--outer carousel-->
				</section>
		</section>
		<!--end wrap carousel-->
		<!--bid-->
		<section class="wrapItems">
			<section class="innerWrapItems">
				<section class="container">
					<section class="row">
						<h2>Books For Bidding</h2>
						<hr>
					<?php
						$res = mysqli_query($con, "select * from list where type like 'bid' ");
						while($row=mysqli_fetch_array($res))
						{
					?>						
						<section class="col-xs-6 col-sm-4 col-md-3 col-xl-12 collection">
							<section class="bidItem">
								<a href="#">
									<img src="<?php echo $row["image_list"];?>" alt="text" class="imageSellBooks" width="300px" height="170px">
									<section class="bookText text-center">
										<h4 class="texTitle"> <?php echo $row["title"];?></h4>
										<p class="price">$<?php echo $row["lastBidPrice"];?></p>
										<form id="bid_form_<?php echo $row["listId"];?>" action="" method="post" enctype="multipart/form-data" style="display:none">
												Increase bid by $ <input type="number" class="form-control" name="bidprice" size="20" 
												style="width:75px;display: inline-block;" min="1" max="10" aria-describedby="sizing-addon1" required>
												<input class="btn btn-default" type="submit" name="updateBid" value="update bid"/>
												<input type="hidden" name="currPrice" value="<?php echo $row["lastBidPrice"];?>"/>
												<input type="hidden" name="id" value="<?php echo $row["listId"];?>"/>
										</form>	
										<button class="btn btn-default myBtnItems btnMobile" type="submit" name="bidBtn" id="bidnow"  
										OnClick="displayBid(<?php echo $row["listId"];?>);">Bid Now</button>
										<button class="btn btn-default myBtnItems btnMobile" type="submit" name="add_cart" 
												formaction="cart.php?action=add_cart&listId=<?php echo $row["listId"];?>"> Add To Cart
												</button>
									</section>
									<!--end bookText-->
								</a>
							</section>
							<!--end bidItems-->
						</section>
						<!--end col-->
					<?php
						}
					?>
					</section>
					<!--end row-->
				</section>
				<!--end container-->
			</section>
			<!--end inner wrap-->
		</section>
		<!--end wrapItems-->
		
		<!--list-->
		<section class="wrapItems">
			<section class="innerWrapItems">
				<section class="container">
					<section class="row">
						<div class="toggleHideSell">
							<h2> Books For Selling</h2><span ><i class="fa fa-chevron-circle-down caretAlign" aria-hidden="true"></i>
									</span><i class="fa fa-chevron-circle-up caretAlignUp" aria-hidden="true"></i>	
								</div>
						<hr>
						<section class="openToggleSell">
							<?php
								$res = mysqli_query($con, "select * from list where type like 'sell' ");
								while($row=mysqli_fetch_array($res))
								{
							?>		
							<form action="" name="purchase" method="post">										
							<section class="col-xs-6 col-sm-4 col-md-3 col-xl-12 collection">
								<section class="sellItem" style="z-index:0;">
									<a href="#">
										<img src="<?php echo $row["image_list"];?>" alt="text" class="imageSellBooks" width="300px" height="170px">
										<section class="bookText text-center">
												<h4 class="texTitle"><?php echo $row["title"];?></h4>
												<p class="text-book text-truncate">
														<small class="textSmall"><?php echo $row["quantity"];?></small>
												</p>
												<p class=" price">$<?php echo $row["price"];?></p>
											
												 <button class="btn btn-default myBtnItems" type="submit" name="add_to_cart" id="btnMobile"
												formaction="cart.php?action=add_to_cart&listId=<?php echo $row["listId"];?>"> Add To Cart
												</button>
										</section>
									</a>
								</section>
							</section>
							</form>
							
							<?php
								}
							?>
						</section>
					</section>
							<!--end row-->
				</section>
				<!--end container-->
				<!--<p><a href="#" class="top" ><i class="fa fa-chevron-circle-up " aria-hidden="true"></i></a></p>-->
			</section>
			<!--end inner wrap-->
		</section>
		<!--end wrapItems-->
	</section>
	
		
	<!--wrapper-->
	<?php
		include("footer.php");

		if(isset($_POST["updateBid"]))
		{
			$bidpriceCtr = $_POST["bidprice"];
			$bidderemail = $_SESSION['emailid'];
			$itemid =  $_POST["id"];
			$lastBidPrice = $_POST["currPrice"]+$bidpriceCtr;
			//update list set lastBidPrice=lastBidPrice+5, bidderEmailId='aseem@gmail.com' where listid=77
			mysqli_query($con, "update list set lastBidPrice=lastBidPrice+$bidpriceCtr, bidderEmailId='$bidderemail' where listid=$itemid");

			mysqli_query($con, "insert into biddinghistory (bidprice, bidderId, item_Id) values($lastBidPrice, '$bidderemail', $itemid)");
			echo "<meta http-equiv='refresh' content='0'>";
			header("location:marketPage.php");
		}
		if(isset($_POST["listItem"]))
		{
				$v1 = rand(1111, 9999);
				$v2 = rand(1111, 9999);
				$v3=$v1.$v2;
				$v3=md5($v3);
				$fnmtmp= $_FILES["pimage"]["tmp_name"];
				$fnm= $_FILES["pimage"]["name"];
				$fnmtype= $_FILES["pimage"]["type"];
				$dst1 = "product_image/".$v3.$fnm;
				$dst= "product_image/".$v3.$fnm;
				$listprice= '';
				$describe='';
				$title = '';

				if(isset($_POST["title"])){
					$title = $_POST["title"];
				}

				if(isset($_POST["describe"])){
					$describe = $_POST["describe"];
				}

				if(isset($_POST["listprice"])){
				$listprice = $_POST["listprice"];
				}

				$success = move_uploaded_file($fnmtmp, $dst);
				
				mysqli_query($con, "insert into bid values('','$title','$dst1', '$describe',$listprice)") ;
		}
?>
</body>
</html>