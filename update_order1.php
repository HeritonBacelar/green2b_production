<?php
include_once('dbConn.php'); // Include the database connection file

// Check if an order_id is provided (via GET request, typically when clicking "Edit" from a list)
$order_id = $_GET['order_id'] ?? null;

if (!$order_id) {
    echo "Order ID is required to update the order!";
    exit();
}

// Fetch the order details from the database
$sql = "SELECT * FROM `order` WHERE order_id = '$order_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the data into an associative array
    $order = $result->fetch_assoc();
} else {
    echo "No order found with ID: $order_id";
    exit();
}

// Close the database connection (optional)
$conn->close();
?>

<?php include('template.php'); ?>
<div class="content">
    
    <form method="POST" action="process_update.php">
        <fieldset>
            <legend>Order Details</legend>
            <label for="order_id">Order ID:</label>
            <input type="text" id="order_id" name="order_id" value="<?= htmlspecialchars($order['order_id']) ?>" readonly><br>

            <label for="customer_id">Customer ID:</label>
            <input type="text" id="customer_id" name="customer_id" maxlength="8" value="<?= htmlspecialchars($order['customer_id']) ?>" readonly><br>
        </fieldset><br>

        <fieldset>
            <legend>Receiving</legend>
            <label for="smartphones_qty">Smartphones Quantity:</label>
            <input type="number" id="smartphones_qty" name="smartphones_qty" min="0" value="<?= htmlspecialchars($order['smartphones_qty']) ?>"><br>

            <label for="tablets_qty">Tablets Quantity:</label>
            <input type="number" id="tablets_qty" name="tablets_qty" min="0" value="<?= htmlspecialchars($order['tablets_qty']) ?>"><br>

            <label for="other_qty">Other Quantity:</label>
            <input type="number" id="other_qty" name="other_qty" min="0" value="<?= htmlspecialchars($order['other_qty']) ?>"><br>
        </fieldset><br>

        <fieldset>
            <legend>Screening</legend>
            <label for="step1_failed_qty">Step 1 Failed Quantity:</label>
            <input type="number" id="step1_failed_qty" name="step1_failed_qty" min="0" value="<?= htmlspecialchars($order['step1_failed_qty']) ?>"><br>
        </fieldset><br>

        <fieldset>
            <legend>Charging and Reset</legend>
            <label for="FRP_kiste_qty">FRP Kiste Quantity:</label>
            <input type="number" id="FRP_kiste_qty" name="FRP_kiste_qty" min="0" value="<?= htmlspecialchars($order['FRP_kiste_qty']) ?>"><br>

            <label for="bootloop_qty">Bootloop Quantity:</label>
            <input type="number" id="bootloop_qty" name="bootloop_qty" min="0" value="<?= htmlspecialchars($order['bootloop_qty']) ?>"><br>

            <label for="keine_reaktion_qty">Keine Reaktion Quantity:</label>
            <input type="number" id="keine_reaktion_qty" name="keine_reaktion_qty" min="0" value="<?= htmlspecialchars($order['keine_reaktion_qty']) ?>"><br>
        </fieldset><br>

        <fieldset>
            <legend>Erasure and Test</legend>
            <label for="step3_failed_qty">Step 3 Failed Quantity:</label>
            <input type="number" id="step3_failed_qty" name="step3_failed_qty" min="0" value="<?= htmlspecialchars($order['step3_failed_qty']) ?>"><br>
        </fieldset><br>

        <button type="submit">Update Order</button>
    </form>

    </div>