<?php
include"dbconfig.php";
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");

$sql="SELECT * FROM `products`";
$result=mysqli_query($con,$sql) or die("Sql Query Failed");

if(mysqli_num_rows($result)>0)
{
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output); 
}
else
{
    echo json_encode(array('message'=>'no record found','status'=>false));
}
?>