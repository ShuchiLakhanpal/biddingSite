 <?php
       ("include cartList.php");
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
    <link rel="stylesheet" href="css/myListings.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!--<script type="text/javascript" src="js/register.js">
    </script>-->
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/responsiveNav.js">
    </script>
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
                        <!--<section class="navBarlogo">
                            -->
                        <a href="javascript:void(0)" class="closeNav backgroundOpenClose">&times;</a>
                        <div id="mobileView">
                            <ul class="nav navbar-nav justified alignList desktop">
                                <li><a href="landingPage.html ">Home</a></li>
                                <li class="current"><a href="marketPage.html">Market</a></li>
                                <li><a href="account.html">Account</a></li>
                                <li><a href="landingPage.html">Contact</a></li>
                                <li class="arrowToggle helpMenu"><a href="">Help<span class="caret caretDown"></span><span class="caretHelp">
                                <i class="fa fa-chevron-circle-up " aria-hidden="true"></i></span></a>
                                    <!--<div>-->
                                    <ul class="helpMenu drop-menu ">
                                        <li id="faq" class="help"><a href="help.html ">FAQ</a></li>
                                        <li class="help" id="helpTwo"><a href="help.html ">How to Bid and Sell</a></li>
                                    </ul>
                                    <!--</div>-->
                                </li>
                                <li class="signUpMenu"><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
        <!--top Content-->
        <section class="wrapContent">
            <section class="wrapContentIn">
                <section class="outerContent">
                    <section class="container">
                        <section class="row">
                            <section id="main-content" class=" listing ">
                                <table class=" tblListing ">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td bgcolor="#0769ad" align="center"><img src="images/bluee.png" style="width:0; height:0;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table border="0" bgcolor="white" width="100%" cellpadding="4">


                                                    <tbody>
                                                        <tr>
                                                            <td valign="top">
                                                                <div id="breadcrumbs"><a href="#">Bid&Sell Home</a> › Bid&Sell Cart</div>
                                                                <h1 class="pageheader">Bid&Sell Cart <span style="font-size: 50%; color: #666; font-weight: normal;">A service provided by loremIpsum.com</span></h1>
                                                               
                                                            </td>
                                                        </tr>

                                                     
                                                            <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />  
                <?php  
                global $con;
                
                $query = mysqli_query($con, " Select listId, image_list, title, description_list, price from list where type like 'sell' "); 
                //$result = mysqli_query($con, $query);  
                if(mysqli_num_rows($query) > 0)  
               {  
                     while($row = mysqli_fetch_array($query))  
                     {  
                         echo"test";
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="cartList.php?action=add&listId=<?php echo $row["listId"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image_list"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["title"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           

                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

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
       ("include footer.php");
       ?>
     
</body>

</html>