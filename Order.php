
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WP_Project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$payment = $_POST["payment"];

$sql = "INSERT INTO `order`(`name`,`email`,`address`,`payment`) VALUES ('$name','$email','$address','$payment')";
$conn->close();
?>