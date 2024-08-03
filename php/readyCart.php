<?php
require_once 'connection.php';
session_start();
try{
    session_start();
    
    $querry = 'SELECT c.*, p.* FROM tbl_cart c JOIN tbl_products p ON c.product_id = p.product_id';
    $data = $connect->query($querry);
    while($row = $data->fetch_assoc()){
        $products[] = $row;
    }
    $_SESSION['cart_products'] = $products;
    header('Location:../pages/cart.php');


    



}catch(Exception $e){
echo $e;
}



?>