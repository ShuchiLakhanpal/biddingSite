<?php
ob_start();
session_start();
//$_SESSION["signin"]="signin";
if($_SESSION["signin"] != "true")
{
  header('Location: register.php');
	exit();
}

include("db-connect.php");


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
    <link rel="stylesheet" href="css/sell.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/animate.css">  
     <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   <script type="text/javascript" src="js/main.js"></script>
    <!--<script type="text/javascript" src="js/register.js">
    </script>-->
    <script type="text/javascript" src="js/responsiveNav.js"> </script>
    <script type="text/javascript" src="js/landingPage.js"></script>
    <!--<script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>-->
    <script type="text/javascript" src="js/market.js"></script>
      <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
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
    <!--end of navigation section>-->
    <!--top Content-->
    <section class="wrapContent">
      <section class="wrapContentlIn">
        <section class="outerContent">
          <section class="container">
            <section class="row">
              <section class=" item">
                <h3 > <b>Fill following fields to list your Item</b></h3>
                <hr class="bighr">
                <form id="sell_form" action="" method="post" enctype="multipart/form-data">
                  <section class="col-lg-6 col-md-3 contactAlignSell ">
                    <section class="input input-group-lg myLabel" >
                        <span class="labelBook titleBook" id="sizing-addon1">Title of Book</span>
                        <input type="text" class="form-control myInput bookInput" name="title" aria-describedby="sizing-addon1" required>
                    </section>
                    <section class="input input-group-lg myLabel">
                        <span class="labelBook " id="sizing-addon1">Upload Photos of Book Here</span>
                        <input type="file" class="form-control myInput " id="photoInput" aria-describedby="sizing-addon1" name="pimage" resize="auto" required >
                    </section>
                    <section class="input input-group-lg myLabel">
                      <span class="labelBook " id="sizing-addon1">Description About Book</span>
                      <textarea rows="10" id="myText" class="form-control myText myInput" name="describe" required></textarea>
                    </section>
                    <section class="input input-group-lg myLabel" id="selectOption" >
                      <span class="typesell " id="sizing-addon1">Select</span>
                        <select id="dialog" style="margin-left: 125px;" name="type" >
                          <option value="" class="bidSelect">Select</option>
                          <option value="bid"  id="bidSelect">Bid</option>
                          <option value="sell"  id="sellSelect">Sell</option>
                        </select>
                      <!--<div id="dialog-bid" class="hideDialog" title="Bid Time is 2 days ">
                          You have selected the uploaded item to be placed under bid. Click on List Items to continue   
                      </div>  
                      <div  class=" hideDialog" id="dialog-sell" title="Listed for Sale ">
                          You have selected the uploaded item to be placed under Sale.Click on List Items to continue     
                      </div>  -->
											<section class="input input-group-lg myLabel">
                      <span class="labelBook priceText" id="sizing-addon1">Quantity</span>
                      <input type="number" class="form-control myInput quantity" name="quantity" min="1" max="50" aria-describedby="sizing-addon1" required>
                    </section>
                    </section><br/><br/>
                    <section class="input input-group-lg myLabel">
                      <span class="labelBook priceText" id="sizing-addon1">Price</span>
                      <input type="number" class="form-control myInput price" name="listprice" min="1" max="50" aria-describedby="sizing-addon1" placeholder="$" required>
                    </section>
                     <section class="input input-group-lg myLabel">
                      <span class="labelBook priceText" id="sizing-addon1">Enter Date</span>
                      <input type="date" class="form-control dateSell myInput" name="date" aria-describedby="sizing-addon1" required>
                     <input type="hidden" name="biddingDateEnd" value=""/>
                    </section>
                    <section class="input input-group-lg myLabel">
                      <input class="btn btn-lg myBtn" id="myBtn" type="submit" name="listItem" value="Submit">
                    </section>
                  </section>  
                  <!--</button>-->
                </form>
  <?php
	//echo $_SESSION["signin"];
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
 			$type = '';
      $biddingEndDate = '';
      $date = '';
			$quantity='';
      $sellerEmailId = $_SESSION["emailid"];

			if(isset($_POST["title"])){
				$title = $_POST["title"];
			}

			if(isset($_POST["describe"])){
				$describe = $_POST["describe"];
			}

			if(isset($_POST["listprice"])){
			  $listprice = $_POST["listprice"];
			}
 			if(isset($_POST["type"])){        
        $type = $_POST["type"];
      }

      if(isset($_POST["date"])){
         // $date =strtotime("date");
        $bidEndDate =$_POST["date"];
       }

			 if(isset($_POST["quantity"])){        
        $quantity = $_POST["quantity"];
      }

			$success = move_uploaded_file($fnmtmp, $dst);
			
			mysqli_query($con,"insert into list (title, image_list, description_list, price, type, biddingEndDate,currentDate,quantity, sellerEmailId, 
                   lastBidPrice) values('$title','$dst1', '$describe',$listprice,'$type',' $bidEndDate', now(),'$quantity' ,'$sellerEmailId',$listprice)") ;

									// $mysqli ->query("insert into cart (listId, quantity)values('$listId' ,'1')");

			header('Location: marketPage.php');
			exit();
     //echo "<meta http-equiv='refresh' content='0'>";

    

    }
  ?>
              </section>
            </section>
            <!--end container-->
          </section>
          <!--end row-->
        </section>
        <!--end col-->
        <p><a href="#" class="top" ><i class="fa fa-chevron-circle-up " aria-hidden="true"></i></a></p>
      </section>
      <!--end outerContent-->
    </section>
    <!--end wrap in-->
  </section>
  <!--end outer content-->
	<?php
  include("footer.php");
	?>
</body>

</html>