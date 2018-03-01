<?php

function display_cart($emailid)
{
	global $con;
	$queryCart = mysqli_query($con,"select a.price, a.title, a.description_list, a.image_list, b.listid, count(b.listId) as count from list a join cart b on a.listid=b.listid where b.emailid='$emailid' group by b.listId");

	//$num = mysqli_num_rows($queryCart);
	echo "<table align ='center' border='1'>
	<tr>
	<th width='160px' height='50px' class='tableCart' >Image</th>
	<th width='160px' height='50px' class='tableCart'>Title</th>
	<th width='160px' height='50px' class='tableCart'>Description</th>
	<th width='160px' height='50px'class='tableCart'>Quantity</th>
	<th width='160px' height='50px'class='tableCart'>Price</th>
	<th width='160px' height='50px'class='tableCart'>Total Price</th>
	</tr>";
	$grandTotal = 0;
	while($row=mysqli_fetch_array($queryCart))
	{
		$st= $row['count']*$row['price'];	
		echo "<tr>";
		echo "<td width='120px' height='50px'>" .'<img src=" '.$row['image_list'].' " width="100px" height="100px">' . "</td>";
		echo "<td width='120px' height='50px'>" . $row['title'] . "</td>";
		echo "<td width='120px' height='50px'>" . $row['description_list'] . "</td>";
		echo "<td width='120px' height='50px'> " . $row['count'] . "</td>";
		echo "<td width='120px' height='50px'> $" . $row['price'] . "</td>";
		echo "<td width='160px' height='50px'class='tableCart' border='0'>$ $st </td>";
		echo "</tr>";
		$grandTotal += $st;
	}

	echo"<tr>
	<th colspan='5' width='160px' height='50px'class='tableCart' border='0'>Grand Total</th>
	<th width='160px' height='50px'class='tableCart' border='0'>$ $grandTotal </th>
	</tr>";
	echo "</table>";
}							

if($_SESSION["signin"] == "")
{
	header('Location: register.php');
}
?>