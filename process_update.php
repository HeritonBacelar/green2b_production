<?php
include_once('dbConn.php'); // Include the database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $order_id = $_POST['order_id'];
    $customer_id = $_POST['customer_id']; 
    $smartphones_qty = $_POST['smartphones_qty'] ?? 0;
    $tablets_qty = $_POST['tablets_qty'] ?? 0;
    $other_qty = $_POST['other_qty'] ?? 0;
    $step1_failed_qty = $_POST['step1_failed_qty'] ?? 0;
    $FRP_kiste_qty = $_POST['FRP_kiste_qty'] ?? 0;
    $bootloop_qty = $_POST['bootloop_qty'] ?? 0;
    $keine_reaktion_qty = $_POST['keine_reaktion_qty'] ?? 0;
    $step3_failed_qty = $_POST['step3_failed_qty'] ?? 0;

    // Validate required fields
    if (empty($order_id) || empty($customer_id)) {
        echo "Order ID and Customer ID are required!";
        exit();
    }

    // Construct the SQL UPDATE query
    $sql = "UPDATE `order` SET 
                customer_id = '$customer_id', 
                smartphones_qty = '$smartphones_qty', 
                tablets_qty = '$tablets_qty', 
                other_qty = '$other_qty', 
                step1_failed_qty = '$step1_failed_qty', 
                FRP_kiste_qty = '$FRP_kiste_qty', 
                bootloop_qty = '$bootloop_qty', 
                keine_reaktion_qty = '$keine_reaktion_qty', 
                step3_failed_qty = '$step3_failed_qty' 
            WHERE order_id = '$order_id'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Order updated successfully.";
        // Redirect to a success page
        header("Location: update_success.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>
