<?php
include "dbconfig.php";

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods, Authorization, X-Requested-With");

// Read JSON input
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Check if JSON decoding was successful
if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(array('message' => 'Invalid JSON data', 'status' => false, 'error' => json_last_error_msg()));
    exit;
}

// Ensure required fields are present
$required_fields = ['pname', 'Description', 'pprice', 'stockquantity', 'category', 'pdosage', 'side_effect', 'pmanufacturer', 'pimagelink'];

foreach ($required_fields as $field) {
    if (empty($data[$field])) {
        echo json_encode(array('message' => "Missing required field: $field", 'status' => false));
        exit;
    }
}

$name = $data['pname'];
$description = $data['Description'];
$price = $data['pprice'];
$stock_quantity = $data['stockquantity'];
$category = $data['category'];
$dosage = $data['pdosage'];
$side_effect = $data['side_effect'];
$manufacturer = $data['pmanufacturer'];
$image_link = $data['pimagelink'];

// Use prepared statements to avoid SQL injection
$stmt = $con->prepare("INSERT INTO products (name, description, price, stock_quantity, category_id, dosage, side_effects, manufacturer, image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssdisssss", $name, $description, $price, $stock_quantity, $category, $dosage, $side_effect, $manufacturer, $image_link);

if ($stmt->execute()) {
    echo json_encode(array('message' => "Data Inserted Successfully", 'status' => true));
} else {
    echo json_encode(array('message' => "Data is not Inserted Successfully", 'status' => false, 'error' => $stmt->error));
}

$stmt->close();
$con->close();
?>