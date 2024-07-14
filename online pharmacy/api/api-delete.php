<?php
header("Content-Type:application/json");
header("Access-Control-Allow-OriginL:*");
header("Access-Control-Allow-Methods:DELETE");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

$data=json_decode(file_get_contents("php://input"),true);
$product_id=$data['product_id'];

include "dbconfig.php";

$sql="DELETE FROM test WHERE id={$product_id};";
if(mysqli_query($con,$sql))
{
    echo json_encode(array("message"=>"Data Deleted Successfullym","status"=>true));
}
else
{
    echo json_encode(array("message"=>"Data is not Deleted Successfullym","status"=>false));
}
?>