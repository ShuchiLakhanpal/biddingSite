<?php
	include("db-connect.php");

	// if(isset($_GET['action']) && $_GET['action']== 'add_to_cart')//check action is in url and value is add_to_cart
	// {
		session_start();
	
		$emailid = $_SESSION['emailid'];
		
		if(isset($_GET['listId'])){
			$listId=$_GET['listId'];
			mysqli_query($con, "insert into cart (listId, quantity, emailid)values('$listId' ,'1', '$emailid')");
		}
		
	// }
	



	include("addCart.php");
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
		<link rel="stylesheet" href="css/cart.css">
		<!--<link rel="stylesheet" href="css/marketPage.css">-->
		<link rel="stylesheet" href="css/mobile.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/register.js">
		</script>
		<script src="js/wow.min.js"></script>
		<script type="text/javascript" src="js/responsiveNav.js">
		</script>
		<script type="text/javascript" src="js/market.js"></script>
</head>
<body>
	<section id="wrapper">
		<!--navigation-->
		<!--navigation-->
		<?php
			include("nav.php");
		?>
		<!--end of navigation section>-->
		<div id="navIcon">
				<span style="font-size:30px;cursor:pointer" class="openNav backgroundOpenClose">&#9776;</span>
		</div>
		<!--top Content-->
		<section class="col-xs-12 col-md-12">
			<section class="wrapContentIn">
				<section class="outerContent">
					<section class="container">
						<section class="row">
							<section id="main-content" class=" listing ">
								<!--<form action="cart/update" method="post">-->
								<table class="cartTable" cellpadding="6" cellspacing="1">
									<tbody>
										<tr>
												<!--<td class="columnTop">
													<a href="#" id="headerLink"><img id="topImg" src="images/bluee.png" alt="Bid&Sell Books" class="topImg"></a>
											</td>-->
											<td class="topNavLinks" align="right">
													<a href="account.html"><strong class="strongText">Your Account</strong></a>&nbsp;|&nbsp;
													<a href="#"><strong class="strongText">Your Bid&Sell Basket</strong></a>&nbsp;
													<!--<a href="/help.aspx"><strong class="strongText">Help</strong></a>&nbsp;-->
											</td>
										</tr>
											<!--end first tr-->
										<tr>
												<td colspan="2" class="colTwo">
														&nbsp;
												</td>
										</tr>
									</tbody>
										<!--end first tbody-->
			</table>
			<form action="" method="post" name="cartForm" id="formCart">
				<table class="tableblue">
					<tbody>
						<tr>
							<td>
								<table cellpadding="0" cellspacing="0" class="tableTwo">
									<tbody>
											<tr>
													<td align="center" class="columnMid">
															<h4 class="heading4">Bid&Sell Cart</h4>
													</td>
											</tr>
									</tbody>
								</table>
								<!--end inner table-->
								<table cellpadding="4" class="innerTable">
									<tbody>
										<tr>
											<td>
												<div id="breadcrumbs">
														<a href="#" class="breadCrumbs">Bid&Sell Home</a> > Bid&Sell Cart
												</div>
												&nbsp; &nbsp;
												<p class="paraTextCart">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea
												</p>&nbsp;
												<!--<span id="contentPlaceHolder1_lblMsg" class="msg"></span>-->
											</td>
											<td align="center" class="columnMid">
													<!--<h4 class="heading4">Bid&Sell Cart</h4>-->
											</td>
										</tr>
										<tr id="contentPlaceHolder1_RowInstructions">
												<td></td>

										</tr>
									
																		<tr><?php display_cart($emailid);?></tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td>
													<p><button class="btn- btn-default cartBtn" type="submit">Update Cart</button>
													<button class="btn- btn-default cartBtn cartBtn cartBack" type="submit" name="checkout"
													formaction="checkout.php">
															 Confirm</button></p>
												</td>
											
										</tr>

									</tbody>
										<!--end of innerTable's tbody-->
										
								</table>
												</td>
											</tr>
										</tbody>
									</table>
									<!--end table 2-->
								</form>
									<!--end form-->
							</section>
								<!--end container-->
						</section>
						<!--end row-->
					</section>
						<!--end col-->
				</section>
					<!--end outerContent-->
			</section>
			<!--end wrap in-->
		</section>
		<!--end outer wrapcontent-->
	</section>	
	<?php
  include("footer.php");
	?>
</body>
</html>