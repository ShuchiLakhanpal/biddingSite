<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
//localhost mysql connection
$dbname = 'bid_sell_books';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

//bytehost mysql connection
// $dbname = 'b7_19983540_bid_sell_books';
// $dbuser = 'b7_19983540';
// $dbpass = 'Aseem@22';
// $dbhost = 'sql302.byethost7.com';

// Create connection
$con = new mysqli($dbhost, $dbuser, $dbpass);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
//echo "Connected successfully\r\n";

if (!mysqli_select_db($con, $dbname)) {
    die("Uh oh, couldn't select database $db");
}

// $sql = "Select title, price from list";
// //$sql = "Select * from userinfo";
// if (!$conn->query($sql)) {
//     printf("Errormessage: %s\n", $conn->error);
// }else
// $result = $conn->query($sql);
// printf("Select returned %d rows.\n", $result->num_rows);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "title: " . $row["title"]. " - price: " . $row["price"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();

// // $get = mysqli_query( 'Select item_Id, price, status, title_item, image_item from item where item_quantity > 0 order by item_Id Desc');
// // if(mysqli_num_rows($get) == 0)
// // {
// //     echo"There are no products to display";
// // }
// // else{
// //     echo("Success!");
// // }