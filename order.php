<?php
$product = isset($_GET['product']) ? $_GET['product'] : "Unknown Product";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <style>
        form { width: 350px; margin: auto; }
        input, textarea { width: 100%; padding: 7px; margin: 5px 0; }
        button {
            padding: 10px; background: green; color: white; border: none;
            width: 100%; cursor: pointer;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Order: <?php echo $product; ?></h2>

<form action="save_order.php" method="POST">
    
    <input type="hidden" name="product_name" value="<?php echo $product; ?>">

    <label>Your Name</label>
    <input type="text" name="customer_name" required>

    <label>Email</label>
    <input type="email" name="customer_email" required>

    <label>Phone</label>
    <input type="text" name="customer_phone" required>

    <label>Address</label>
    <textarea name="address" required></textarea>

    <button type="submit">Place Order</button>

</form>

</body>
</html>