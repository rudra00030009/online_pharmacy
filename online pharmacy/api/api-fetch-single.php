<?php
include "dbconfig.php";

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$data = json_decode(file_get_contents("php://input"), true);
$product_id = $data['product_id'];

$sql = "SELECT * FROM products WHERE id={$product_id}";
$result = mysqli_query($con, $sql);

if ($result) 
{
    if (mysqli_num_rows($result) > 0) 
    {
        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);
    }
    else
    {
        echo json_encode(array('message' => "No data found", 'status' => false));
    }
} else {
    echo json_encode(array('message' => "Failed to run SQL query", 'status' => false));
}
?>