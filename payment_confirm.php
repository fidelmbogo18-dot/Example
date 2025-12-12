<?php
include "db.php";

$order_id = $_POST['order_id'];
$product = $_POST['product'];
$method = $_POST['method'];
$amount = $_POST['amount'];
$password = $_POST['password']; // not stored, just simulated

mysqli_query($conn, "INSERT INTO payments (order_id, method, amount) VALUES ('$order_id', '$method', '$amount')");
// Simulate payment success message
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box {
            width: 400px; margin: 50px auto; background: white; padding: 20px;
            border-radius: 10px; text-align: center; box-shadow: 0 0 10px #aaa;
        }
        h2 { color: green; }
        a { display: inline-block; margin-top: 15px; text-decoration: none;
            background: blue; color: white; padding: 10px 20px; border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>✅ Payment Successful</h2>
    <p>Your payment for <strong><?php echo $product; ?></strong> has been received.</p>
    <p><b>Method:</b> <?php echo $method; ?></p>
    <p><b>Amount:</b> TZS <?php echo $amount; ?></p>
    <p><b>Order ID:</b> <?php echo $order_id; ?></p>
    <a href="index.html">Go Back to Shop</a>
</div>

</body>
</html>