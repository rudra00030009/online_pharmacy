<?php
include "dbconfig.php";

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods:PUT");
header("Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Access-Control-Allow-Methods,Authorization,X-Requested-With");


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

$id = $data['product_id'];
$name = $data['pname'];
$description = $data['Description'];
$price = $data['pprice'];
$stock_quantity = $data['stockquantity'];
$category = $data['category'];
$dosage = $data['pdosage'];
$side_effect = $data['side_effect'];
$manufacturer = $data['pmanufacturer'];
$image_link = $data['pimagelink'];


$sql = "UPDATE products SET product_id='{$id}',name='{$name}',description='{$description}',dosage='{$dosage}',price='{$price}',stock_quantity='{$stock_quantity}',manufacturer='{$manufacturer}',category_id={'$category'},image_url='{$image_link}' WHERE product_id={$id};";

if(mysqli_query($con, $sql)) 
{
    echo json_encode(array('message' => "Data Updated Successfully", 'status' => true));
}
else 
{
    echo json_encode(array('message' => "Data is not Updated Successfully", 'status' => false));
}
?>