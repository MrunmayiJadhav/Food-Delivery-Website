
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WP_Project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
$reviewID = $_POST["reviewID"];
$userID = $_POST["userID"];
$restaurantID = $_POST["restaurantID"];
$orderID = $_POST["orderID"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];
$reviewdate = $_POST["reviewdate"];

$sql = "INSERT INTO `review`(`reviewID`,`userID`,`restaurantID`,`orderID`,`rating`,`comment`,`reviewdate`) VALUES ('$reviewID','$userID','$restaurantID','$orderID','$rating','$comment','$reviewdate')";
if($conn->query($sql)==true){
    echo "Review submitted...";
}
else{
    echo "ERROR";
}
$conn->close();
?>