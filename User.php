
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WP_Project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
$userID = $_POST["userID"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$birthdate = $_POST["birthdate"];

$sql = "INSERT INTO `user`(`userID`,`username`,`password`,`email`,`phone`,`address`,`birthdate`) VALUES ('$userID','$username','$password','$email','$phone','$address','$birthdate')";
if($conn->query($sql)==true){
    echo "Registration successfully...";
}
else{
    echo "ERROR";
}
$conn->close();
?>