<?php
	include("db-connect.php");
	session_start();
	$emailid = $_SESSION['emailid'];
	include("db-connect.php");
	
	mysqli_query($con, "delete from cart where emailid='$emailid')");

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
    
  <div id="navIcon">
            <span style="font-size:30px;cursor:pointer" class="openNav backgroundOpenClose">&#9776;</span>
        </div>
        <!--heeader-->
        <section class="cp-xs-12 col-md-12">
            <section class=" panel panel-default">
                <section class=" panel-heading panel-heading-blue">
                    <section class="container">
                        <section class="row">
                            <section class="mainContent listing cart-block panel-body paid">

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
                                                </a>&nbsp;
                                              
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
                                                    <table cellpadding="0" cellspacing="0" class="tableTwo thanks">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" class="columnMid">
                                                                    <h4 class="heading4">Payment Status</h4>
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
                                                                        <a href="#">Bid&Sell Home</a> > Bid&Sell Confirmation
                                                                    </div>
																																		<hr class="header">
                                                                    <!--<h2 class="pageHeader">Bid&Sell Account</h2>-->


                                                                </td>
                                                            </tr>
																															

                                                        </tbody>
                                                        <!--end of innerTable's tbody-->
																												
                                                    </table>
																											<section class="mainContent listing cart-block panel-body thankYou paid">
																															Thank you for shopping with us. Your items will be shipped to you shortly!!!
																											</section>
																											<hr class="header">
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

        <?php
		include("footer.php");
        ?>

</body>

</html>