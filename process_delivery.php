<?php

$recipientName = $_POST['recipientName'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postalCode = $_POST['postalCode'];
$phoneNumber = $_POST['phoneNumber'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO deliveries (recipient_name, address, city, state, postal_code, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $recipientName, $address, $city, $state, $postalCode, $phoneNumber);
$stmt->execute();

$stmt->close();
$conn->close();


header("Location: success.php");
exit();
?>
