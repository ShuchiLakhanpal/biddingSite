
<?php
ob_start();
session_start();
include("db-connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <title>Checkout Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mainStyleSheet.css">
    <link rel="stylesheet" href="css/landingPage.css">
    <link rel="stylesheet" href="css/home.css">
     <link rel="stylesheet" href="css/register.css"> 
    <link rel="stylesheet" href="css/mobile.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/responsiveNav.js"> </script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/register.js">
     </script> 
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
                        <!--<section class="navBarlogo">
                            -->
                        <a href="javascript:void(0)" class="closeNav backgroundOpenClose">&times;</a>
                        <div id="mobileView">
                            <ul class="nav navbar-nav justified alignList desktop">
                                <li><a href="landingPage.html ">Home</a></li>
                                <li ><a href="marketPage.php">Market</a></li>
                                <li><a href="account.html">Account</a></li>
                                <li><a href="landingPage.html">Contact</a></li>
                                <li class="arrowToggle helpMenu"><a href="#">Help<span class="caret caretDown"></span><span class="caretHelp">
                                <i class="fa fa-chevron-circle-up " aria-hidden="true"></i></span></a>
                                    <!--<div>-->
                                    <ul class="helpMenu drop-menu ">
                                        <li id="faq" class="help"><a href="help.html ">FAQ</a></li>
                                        <li class="help" id="helpTwo"><a href="help.html ">How to Bid and Sell</a></li>
                                    </ul>
                                    <!--</div>-->
                                </li>
                                <li class="signUpMenu current"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <!--<li class="signUpMenu mobileCart"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>-->
                            </ul>
                        </div>
                        <div class="form">
                            <form class="form-search ngen-search-form navbar-form navbar-left" action="" method="get">
                                <section class="input-group justifiedSearch searchMobile">
                                    <input type="text" name="q" id="search-input" class="form-search-input buttonSearch" placeholder="Search by title, ISBN"
                                        dir="ltr">
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
        <div id="back">
  <div class="backRight"></div>
  <div class="backLeft"></div>
</div>

<div id="slideBox">
  <div class="topLayer">
    <div class="left">
      <div class="content">
        <h2 id="signUp">Sign Up</h2>
        <form method="post" id="registration_form"  action="" class="form-horizontal signUp" name="registration">
          <div class="form-group register alignLeftForm">
            
             <div class="input-group alignLeftInput">
              <label for="name" class="labelSignUp label control-label " >Name</label><br><br>
						<span class="input-group-addon"><i class="glyphicon glyphicon-user mobileView"></i></span>
						<input id="name" type="text" class="form-control" name="name" placeholder="Your Name">
						<span class="errorMsg" id="userNameErrorMsg"></span><br>
						<br>
						<div class="input-group emailSignup">
										<label for="registeremail" class="labelSignUp label control-label " >Enter Email</label><br><br>
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope mobileView emailInput"></i></span>
						<input id="registeremail" type="text" class="form-control emailInput" name="email" placeholder="Email" >
						
						<span class="errorMsg" id="emailErrorMsg">*</span><br>
					</div>
      
					</div>
					<div class="input-group alignLeftInput alignLeftPassword">
							<label for="registerpassword" class="labelSignUp label control-label " >Password</label><br><br>
						<span class="input-group-addon mobileLog"><i class="glyphicon glyphicon-lock mobileView "></i></span>
						<input id="registerpassword" type="password" class="form-control" name="password" placeholder="Password" >
						<span  class="errorMsg" id="passwordErrorMsg"></span><br>
					</div>
					
   
					<div class="input-group alignLeftInput alignLeftConfirmPassword">
							<label for="confirmpassword" class="labelSignUp label control-label" >Confirm Password</label><br><br>
						<span class="input-group-addon mobileLog"><i class="glyphicon glyphicon-lock mobileView "></i></span>
						<input id="confirmpassword" type="password" class="form-control" name="cpassword" placeholder="Type Password again" >
						<span  class="errorMsg" id="confirmPasswordErrorMsg"></span><br>
					</div>
					<div class="input-group alignLeftInput alignLeftContact">
							<label for="contact" class="labelSignUp label control-label" > Contact Number</label><br><br>
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock mobileView"></i></span>
						<input id="contact" type="text" class="form-control" name="contact" placeholder="Contact Number" >
					
					</div>
          <button type="button" id="goLeft" class="off signUpBtn" name="logIn">Login</button>
        <button class="signUpBtn" formaction="#" type="button">Sign up</button>              
          </div>
          <!--<div class="form-group">
              <input type="text" id="registeremail" placeholder="name@gmail.com" required/>
          </div>-->
          <div class="form-group"></div>
          <div class="form-group"></div>
        </form>
      </div>
    </div>
    <div class="right">
      <div class="content">
        <h2 id="logIn">Login</h2>
        <form method="post" action="" name="logIn" id="login_form">          
					<!--<form>-->
          <div class="input-group logInAlign">
              <label for="loginemail" class="labelLogIn label control-label " >Enter Email</label><br>
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="loginemail" type="text" class="form-control" name="email" placeholder="Email">
							<br>
							<span class="logInErrorMsg" id="logInEmail"></span><br>
					</div>
					<div class="input-group logInAlign">
							<label for="loginpassword" class="labelLogIn label control-label" >Password</label><br>
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="loginpassword" type="password" class="form-control" name="password" placeholder="Password"><br>
						<span class="logInErrorMsg" id="logInPasswordMsg"></span><br>
					</div>
          <div class="textP logInAlign">
            <p id="one"><a href="#">Forgot Password ?</a></p>
            <p id="two">Don't have account? Click on the Sign Up button </p>
            </div>
          <button id="goRight"type="button" class="off offlogin bttnMob">Sign Up</button>
          <button id="login" type="submit" class="bttnMob" name="logIn">Login</button>
        </form>
       
      </div>
    </div>
  </div>
</div>


  </section>
    <!--inner-wrapper-->
    </section>
    <!--wrapper-->
    
    <footer>
        <ul class="social">
            <li>
                <a href="https://www.facebook.com" target="_blank"><img src="images/facebook.png" class="icons" /></a>
            </li>
            <li>
                <a href="https://plus.google.com" target="_blank"><img src="images/gPlus.png" class="iconsGPlus" /></a>
            </li>
            <li>
                <a href="https://twitter.com" target="_blank"><img src="images/twitter.png" class="iconsTwitter" /></a>
            </li>
        </ul>
        <section>
            <h6 id="cpright">@copyright 2017</h6>
        </section>
        <section class="textFooter">
            <ul id="footerList">
                <li><a href="landingPage.html">About Us</a></li>
                <li><a href="landingPage.html">Meet Our Team</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </section>
    </footer>
     <?php

		 //$signin ='signin';
		//if($_SESSION["signin"] == "true")
		//{
			//echo $_SESSION["signin"];
		//	header('Location: sell.php');
		//	exit();
		//}
    if(isset($_POST["logIn"]))
    {
			//$signin ='signin';
			//echo $_SESSION["signin"];
			$email = '';
			$password = '';
			echo $_POST["email"];
			if(isset($_POST["email"])){
        $email = $_POST["email"];
      }

      if(isset($_POST["password"])){
        $password = $_POST["password"];
      }
			$res= mysqli_query($con, "select * from userinfo where email_id = '$email' && password='$password' ");
			
			while($row=mysqli_fetch_array($res))
			{
					$_SESSION["signin"] = "true";
					$_SESSION["emailid"] = $row["email_id"];
					
					header('Location: sell.php');
			}
}
?>
</body>
</html>

