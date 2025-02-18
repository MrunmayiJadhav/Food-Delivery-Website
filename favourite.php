
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WP_Project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
$favID = $_POST["favID"];
$userID = $_POST["userID"];
$restaurantID = $_POST["restaurantID"];

$sql = "INSERT INTO `favourite`(`favID`,`userID`,`restaurantID`) VALUES ('$favID','$userID','$restaurantID')";
if($conn->query($sql)==true){
    echo "Favourites added...";
}
else{
    echo "ERROR";
}
$conn->close();
?>