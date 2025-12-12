<?php
include "db.php";

$product_name = $_POST['product_name'];
$customer_name = $_POST['customer_name'];
$customer_email = $_POST['customer_email'];
$customer_phone = $_POST['customer_phone'];
$address = $_POST['address'];

$sql = "INSERT INTO orders (product_name, customer_name, customer_email, customer_phone, address)
        VALUES ('$product_name', '$customer_name', '$customer_email', '$customer_phone', '$address')";

if (mysqli_query($conn, $sql)) {
    // Get last order ID
    $order_id = mysqli_insert_id($conn);
    // Redirect to payment page
    header("Location: payment.php?order_id=$order_id&product=$product_name");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>