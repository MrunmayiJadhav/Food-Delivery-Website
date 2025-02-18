
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WP_Project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
$orderitemID = $_POST["orderitemID"];
$orderID = $_POST["orderID"];
$itemID = $_POST["itemID"];
$quantity = $_POST["quantity"];
$subtotal = $_POST["subtotal"];

$sql = "INSERT INTO `orderitem`(`orderitemID`,`orderID`,`itemID`,`quantity`,`subtotal`) VALUES ('$orderitemID','$orderID','$itemID','$quantity','$subtotal')";
if($conn->query($sql)==true){
    echo "Order Item Placed successfully...";
}
else{
    echo "ERROR";
}
$conn->close();
?>