<?php
	include("db-connect.php");

	
        
		session_start();
		
		//$grandTotal= $_SESSION['grandTotal'];
		$emailid = $_SESSION['emailid'];
		//mysqli_query($con, "insert into cart (listId, quantity, emailid)values('$listId' ,'1', '$emailid')");

	

	include("addCart.php");
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
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/landingPage.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/marketPage-org.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/register.js">
    </script>
    <script type="text/javascript" src="js/landingPage.js"></script>
    <script type="text/javascript" src="js/responsiveNav.js">
    </script>
      <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/market.js"></script>
    <script type="text/javascript" src="js/sell.js"></script>
</head>

<body>

    <section id="wrapper">

        <!--navigation-->
	<?php
			include("nav.php");
		?>
        <!--end of navigation section>-->
        <div id="navIcon">
            <span style="font-size:30px;cursor:pointer" class="openNav backgroundOpenClose">&#9776;</span>
        </div>
        <!--heeader-->
        <section class="cp-xs-12 col-md-12">
            <section class=" panel panel-default">
                <section class=" panel-heading panel-heading-blue">
                    <section class="container">
                        <section class="row">
                            <section class="mainContent" class=" listing cart-block panel-body">

                                <!--<form action="cart/update" method="post">-->
                                <table class="cartTable" cellpadding="6" cellspacing="1">
                                    <tbody>
                                        <tr>
                                            <!--<td class="columnTop">
                                                <a href="#" id="headerLink"><img id="topImg" src="images/bluee.png" alt="Bid&Sell Books" class="topImg"></a>
                                            </td>-->
                                            <td class="topNavLinks" align="right">
                                                <a href="cart.php"><strong class="strongText">Your Account</strong>
                                                </a>&nbsp;|&nbsp;
                                                <a href="sell.php"><strong class="strongText">Upload Books for Bid/Sell</strong>
                                                </a>&nbsp;|&nbsp;
                                                <!--<a href="cart.html"><strong class="strongText">Your Bid&Sell Basket</strong>
                                                </a>&nbsp;|&nbsp;
                                                <a href="/help.aspx"><strong class="strongText">Help</strong>
                                                </a>&nbsp;-->
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
                               
                                <form action="cart/update" method="post">

                                    <table class="tableblue">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table cellpadding="0" cellspacing="0" class="tableTwo">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" class="columnMid">
                                                                    <h4 class="heading4">Account</h4>
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
                                                                        <a href="#">Bid&Sell Home</a> > Bid&Sell Account
                                                                    </div>
                                                                    <!--<h2 class="pageHeader">Bid&Sell Account</h2>-->


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


                                


                                <table class="cartTable table table-striped">
                                    <tbody>
                                        <tr><?php display_cart($emailid);?></tr>
                                            <input type="hidden" id="valueFromMyModal">
  <!-- Dialog Box-->
  <!--<div class="dialog" id="myform">
    <form>
      <label id="valueFromMyButton">
      </label>
      <input type="hidden" value="" id="name">Products will be shipped after payment is confirmed
      <div align="center">
        <input type="button" value="Ok" id="btnOK">
      </div>
	</form>
  </div>-->
                                    </tbody>
                                </table>
                                <h3>Shipping Info</h3>
                                <form id="shipping_form" action="thankyou.php" method="post">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address2" required>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city" required>
                                    </div>
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" name="state" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control" name="postalcode" required>
                                    </div>
                                    <p>
                                        <button id="btnShow" class="btn btn-primary button" type="submit" name="check">Checkout</button>
                                    </p>
                                </form>
                                
                          
                            </section>
                            <!--end container-->
                        </section>
                        <!--end row-->
                    </section>
                    <!--end col-->
                    <p><a href="#" class="top"><i class="fa fa-chevron-circle-up " aria-hidden="true"></i></a></p>
                </section>
                <!--end outerContent-->
            </section>
            <!--end wrap in-->
        </section>
        <!--end outer wrapcontent-->

        <?php
		include("footer.php");
        ?>

</body>

</html>