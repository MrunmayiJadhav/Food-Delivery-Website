
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WP_Project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
$deliveryID = $_POST["deliveryID"];
$orderID = $_POST["orderID"];
$driverID = $_POST["driverID"];
$deliverystatus = $_POST["deliverystatus"];
$estddeliverytime = $_POST["estddeliverytime"];
$actdeliverytime = $_POST["actdeliverytime"];
$deliveryrating = $_POST["deliveryrating"];

$sql = "INSERT INTO `delivery`(`deliveryID`,`orderID`,`driverID`,`deliverystatus`,`estddeliverytime`,`actdeliverytime`,`deliveryrating`) VALUES ('$deliveryID','$orderID','$driverID','$deliverystatus','$estddeliverytime','$actdeliverytime','$deliveryrating')";
if($conn->query($sql)==true){
    echo "Delivery requested...";
}
else{
    echo "ERROR";
}
$conn->close();
?>