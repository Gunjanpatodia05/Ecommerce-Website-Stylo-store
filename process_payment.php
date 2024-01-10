<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$cardNumber = $_POST['card_number'];
$amount = $_POST['amount'];
$paymentDate = $_POST['payment_date'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO payments (name, phone, card_number, amount, payment_date) VALUES ('$name', '$phone', '$cardNumber', '$amount', '$paymentDate')";

if ($conn->query($sql) === TRUE) {
  echo "Payment successful!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
