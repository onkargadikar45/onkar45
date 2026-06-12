<?php
$conn = new mysqli("localhost", "root", "", "mobile_shop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$status = "Paid";

$sql = "INSERT INTO orders (name, email, address, payment_status)
        VALUES ('$name', '$email', '$address', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}

$conn->close();
?>