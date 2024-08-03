<?php
require_once 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'cart') {
        try{
            $quantity=$_POST['quantity'];
            $product_id= $_POST['id'];
            $qry = "INSERT INTO tbl_cart (product_id, quantity)  values (?,?)" ;
            $statement = $connect->prepare($qry);
            $statement->bind_param('ii',$product_id,$quantity);
            $statement->execute();
            header("Location: ../pages/product.php");


        }catch (Exception $e){
            echo $e->getMessage();

        }










    } elseif ($_POST['action'] === 'order') {
        
    }
}
?>