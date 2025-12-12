<?php
$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : 0;
$product = isset($_GET['product']) ? $_GET['product'] : "Unknown Product";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container {
            width: 400px; margin: 40px auto; background: #fff;
            padding: 20px; border-radius: 10px; box-shadow: 0 0 8px #aaa;
        }
        select, input {
            width: 100%; padding: 10px; margin: 8px 0;
            border: 1px solid #ccc; border-radius: 5px;
        }
        button {
            width: 100%; padding: 10px; background: green; color: white;
            border: none; border-radius: 5px; cursor: pointer;
        }
        button:hover { background: darkgreen; }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment for: <?php echo $product; ?></h2>
    <form action="payment_confirm.php" method="POST">

        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
        <input type="hidden" name="product" value="<?php echo $product; ?>">

        <label>Select Payment Method</label>
        <select name="method" required>
            <option value="">-- Choose Method --</option>
            <option value="M-Pesa (Vodacom)">M-Pesa (Vodacom)</option>
            <option value="HaloPesa (TTCL)">HaloPesa (TTCL)</option>
            <option value="Tigo Mix">Mix by Tigo</option>
            <option value="Airtel Money">Airtel Money</option>
        </select>

        <label>Enter Amount (TZS)</label>
        <input type="number" name="amount" required min="500">

        <label>Enter Payment Password</label>
        <input type="password" name="password" required>

        <button type="submit">Confirm Payment</button>
    </form>
</div>

</body>
</html>