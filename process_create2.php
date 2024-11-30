<?php  

include_once('dbConn.php'); 

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the form
$customer_id = $_POST['customer_id']; 
$order_date = $_POST['order_date'];
$smartphones_qty = $_POST['smartphones_qty'];
$tablets_qty = $_POST['tablets_qty']; 
$other_qty = $_POST['other_qty'];
$step1_failed_qty = $_POST['step1_failed_qty']; 
$FRP_kiste_qty = $_POST['FRP_kiste_qty']; 
$bootloop_qty = $_POST['bootloop_qty'];   
$keine_reaktion_qty = $_POST['keine_reaktion_qty'];   
$step3_failed_qty = $_POST['step3_failed_qty']; 


// Default file path if no file is uploaded
$filePath = null;

// Check if a file was uploaded
if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/'; // Directory to store uploaded files
    $fileName = basename($_FILES['image_upload']['name']);
    $filePath = $uploadDir . $fileName;

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Move uploaded file to the target directory
    move_uploaded_file($_FILES['image_upload']['tmp_name'], $filePath);
}

// Construct the SQL query
$sql = "INSERT INTO `order` (order_id, customer_id, order_date, smartphones_qty, tablets_qty, 
        other_qty, image_path, step1_failed_qty, FRP_kiste_qty, bootloop_qty, keine_reaktion_qty, step3_failed_qty) 
        VALUES (UUID(), '$customer_id', now(), '$smartphones_qty', '$tablets_qty', '$other_qty', '$filePath', 
        '$step1_failed_qty', '$FRP_kiste_qty', '$bootloop_qty', '$keine_reaktion_qty', '$step3_failed_qty')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    header('Location: create_success.php');
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();

?>
