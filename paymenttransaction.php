
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WP_Project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
$transactionID = $_POST["transactionID"];
$orderID = $_POST["orderID"];
$amount = $_POST["amount"];
$paymentmethod = $_POST["paymentmethod"];
$transactiondate = $_POST["transactiondate"];
$transactionstatus = $_POST["transactionstatus"];

$sql = "INSERT INTO `paymenttransaction`(`transactionID`,`orderID`,`amount`,`paymentmethod`,`transactiondate`,`transactionstatus`) VALUES ('$transactionID','$orderID','$amount','$paymentmethod','$transactiondate','$transactionstatus')";
if($conn->query($sql)==true){
    echo "Payment Transaction successful...";
}
else{
    echo "ERROR";
}
$conn->close();
?>