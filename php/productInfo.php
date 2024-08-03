<?php
session_start();
require_once 'connection.php';

$id = $_GET['id'];
echo $id;
$qry = "SELECT * from tbl_products WHERE product_id = ? LIMIT 1" ;
$statement = $connect->prepare($qry);
$statement->bind_param('i',$id);
$statement->execute();
$data=$statement->get_result();
$products = $data->fetch_assoc();
$_SESSION['current_product'] = $products;

header('Location:../pages/product.php');




?>