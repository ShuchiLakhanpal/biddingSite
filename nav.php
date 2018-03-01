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
						<li ><a href="marketPage.php">Market</a></li>
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
						<li class="signUpMenu"><a href="signout.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
						<?php
							}
							
						//if($_SESSION["signin"] == "true") {
						
						//<li class="signUpMenu mobileCart"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
						//<?php
						//}
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