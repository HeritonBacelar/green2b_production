<?php
include_once('dbConn.php'); // Include the database connection

if (isset($_GET['order_id']) && !empty($_GET['order_id'])) {
    $order_id = $conn->real_escape_string($_GET['order_id']); // Sanitize input

    $sql = "SELECT o.*, c.customer_name, c.email, c.telephone, c.address
            FROM `order` o
            INNER JOIN `customer` c ON o.customer_id = c.customer_id
            WHERE o.order_id = '$order_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Order Details</title>
            <style>
                .order-card {
                    max-width: 500px;
                    margin: auto;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    padding: 20px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    font-family: Arial, sans-serif;
                }
                .order-card img {
                    max-width: 100%;
                    border-radius: 8px;
                    margin-bottom: 20px;
                }
                .order-card h1 {
                    font-size: 24px;
                    margin-bottom: 10px;
                }
                .order-card p {
                    margin: 5px 0;
                }
            </style>
        </head>
        <body>
            <div class="order-card">
                <h1>Order Details</h1>
                <p><strong>Order ID:</strong> <?php echo $order['order_id']; ?></p>
                <p><strong>Customer Name:</strong> <?php echo $order['customer_name']; ?></p>
                <p><strong>Email:</strong> <?php echo $order['email']; ?></p>
                <p><strong>Telephone:</strong> <?php echo $order['telephone']; ?></p>
                <p><strong>Address:</strong> <?php echo $order['address']; ?></p>
                <p><strong>Order Date:</strong> <?php echo $order['order_date']; ?></p>
                <p><strong>Smartphones:</strong> <?php echo $order['smartphones_qty']; ?></p>
                <p><strong>Tablets:</strong> <?php echo $order['tablets_qty']; ?></p>
                <p><strong>Other:</strong> <?php echo $order['other_qty']; ?></p>
                <p><strong>Step1 Failed:</strong> <?php echo $order['step1_failed_qty']; ?></p>
                <p><strong>FRP Kiste:</strong> <?php echo $order['FRP_kiste_qty']; ?></p>
                <p><strong>Bootloop:</strong> <?php echo $order['bootloop_qty']; ?></p>
                <p><strong>Keine Reaktion:</strong> <?php echo $order['keine_reaktion_qty']; ?></p>
                <p><strong>Step3 Failed:</strong> <?php echo $order['step3_failed_qty']; ?></p>
                <?php if (!empty($order['image_path'])) { ?>
                    <img src="<?php echo $order['image_path']; ?>" alt="Order Image">
                <?php } else { ?>
                    <p><strong>Image:</strong> No image available for this order.</p>
                <?php } ?>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<p>Order not found.</p>";
    }
} else {
    echo "<p>Invalid Order ID.</p>";
}
?>
